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

    public function getHeroesFromDB(HeroesRequest $request)
    {   $heroesDto = $this->heroesDtoBuilder->buildFromRequest($request->validated());
        $queryResult = $this->heroesReadRepository->getHeroes($heroesDto->toArray());
        $statusCode = is_string($queryResult) ? 404 : 200;
        return response()->json($queryResult, $statusCode);
    }
}
