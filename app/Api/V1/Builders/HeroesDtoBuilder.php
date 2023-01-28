<?php

namespace App\Api\V1\Builders;

use App\Api\V1\Dtos\HeroesDto;

class HeroesDtoBuilder
{
    public function buildFromRequest(array $request): HeroesDto
    {
        $heroesDto = new HeroesDto();

        if (isset($request['filter']['name'])) {
            $heroesDto->setName($request['filter']['name']);
        }
        if (isset($request['filter']['gender'])) {
            $heroesDto->setGender($request['filter']['gender']);
        }
        if (isset($request['filter']['culture'])) {
            $heroesDto->setCulture($request['filter']['culture']);
        }
        if (isset($request['filter']['died'])) {
            $heroesDto->setDied($request['filter']['died']);
        }
        if (isset($request['filter']['mother'])) {
            $heroesDto->setMother($request['filter']['mother']);
        }
        if (isset($request['filter']['father'])) {
            $heroesDto->setFather($request['filter']['father']);
        }
        if (isset($request['filter']['title'])) {
            $heroesDto->setTitle($request['filter']['title']);
        }
        if (isset($request['filter']['alias'])) {
            $heroesDto->setAlias($request['filter']['alias']);
        }
        if (isset($request['filter']['book'])) {
            $heroesDto->setBook($request['filter']['book']);
        }
        if (isset($request['filter']['tv_serie'])) {
            $heroesDto->setTvSerie($request['filter']['tv_serie']);
        }

        return $heroesDto;
    }
}
