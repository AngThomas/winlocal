<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Builders\HeroesDtoBuilder;
use App\Api\V1\Repositories\HeroesReadRepository;
use App\Api\V1\Requests\HeroesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    private HeroesReadRepository $heroesReadRepository;
    private HeroesDtoBuilder $heroesDtoBuilder;

    public function __construct(HeroesReadRepository $heroesReadRepository, HeroesDtoBuilder $heroesDtoBuilder)
    {
        $this->heroesReadRepository = $heroesReadRepository;
        $this->heroesDtoBuilder = $heroesDtoBuilder;
    }

    public function getHeroesFromDB(HeroesRequest $heroesRequest)
    {   $heroesDto = $this->heroesDtoBuilder->buildFromRequest($heroesRequest->validated());
        $queryResult = $this->heroesReadRepository->getHeroes($heroesDto->toArray());
        return response()->json($queryResult);
    }
}
