<?php

namespace App\Services;


use App\Api\V1\Repositories\HeroesWriteRepository;
use App\Helpers\HeroesHelper;
use App\Models\HeroAliases;
use Exception;
use GuzzleHttp\Client;

class HeroService
{
    private Client $client;
    private HeroesWriteRepository $heroesWriteRepository;

    public function __construct(
        Client $client,
        HeroesWriteRepository $heroesWriteRepository
    )
    {
        $this->client = $client;
        $this->heroesWriteRepository = $heroesWriteRepository;
    }

    public function getAndSaveHeroesToDB()
    {
        echo 'Welcome King! Please wait while the Maester completes the book of heroes.';

        $heroes = $this->getHeroes();
        if (is_array($heroes) && !empty($heroes)) {
            $this->saveHeroes($heroes);
        }

        echo 'The book is ready for your insight.';
    }

    private function getHeroes(): ?array
    {
        try {
            $response = $this->client->get(
                HeroesHelper::GET_HEROES_ENDPOINT,
                [
                    'headers' => [
                        'Content-Type' => 'application/json'
                    ]
                ]
            );

            return json_decode($response->getBody()->getContents(), true);

        }catch(Exception $e){ return null;}
    }

    private function saveHeroes(array $heroes)
    {
        foreach ($heroes as $hero) {
                $this->heroesWriteRepository->writeHero(HeroesHelper::getHeroData($hero))
                    ->writeHeroActors($hero['playedBy'])
                    ->writeHeroAliases($hero['aliases'])
                    ->writeHeroAllegiances($hero['allegiances'])
                    ->writeHeroActors($hero['playedBy'])
                    ->writeHeroBooks($hero['books'])
                    ->writeHeroPovBooks($hero['povBooks'])
                    ->writeHeroTitles($hero['titles'])
                    ->writeHeroTvSeries($hero['tvSeries']);


        }
    }
}
