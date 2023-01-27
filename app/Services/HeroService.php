<?php

namespace App\Services;

use App\Helpers\HeroesHelper;
use Exception;
use GuzzleHttp\Client;

class HeroService
{
    private Client $client;

    public function __construct(Client $client){
        $this->client = $client;
    }

    public function getAndSaveHeroesToDB()
    {
        $heroes = $this->getHeroes();
        if (is_array($heroes) && !empty($heroes)) {
            $this->saveHeroes($heroes);
        }
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

    private function saveHeroes(array $heroes): bool
    {
        return false;
    }
}
