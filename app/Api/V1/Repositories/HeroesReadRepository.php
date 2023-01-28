<?php

namespace App\Api\V1\Repositories;

use App\Models\HeroActors;
use App\Models\HeroAliases;
use App\Models\HeroAllegiances;
use App\Models\HeroBooks;
use App\Models\Heroes;
use App\Models\HeroPovBooks;
use App\Models\HeroTitles;
use App\Models\HeroTvSeries;

class HeroesReadRepository
{
    private const SELECT_FIELDS = [
        Heroes::COL_NAME_ID,
        Heroes::COL_NAME_NAME,
        Heroes::COL_NAME_GENDER,
        Heroes::COL_NAME_CULTURE,
        Heroes::COL_NAME_DIED,
        Heroes::COL_NAME_MOTHER,
        Heroes::COL_NAME_FATHER,
        HeroAliases::COL_NAME_ALIAS,
        HeroBooks::COL_NAME_BOOK_URL,
        HeroTitles::COL_NAME_TITLE,
        HeroTvSeries::COL_NAME_TV_SERIES,
    ];

    public function getHeroes(array $searchFields)
    {
        return Heroes::join(HeroAliases::TABLE_NAME, Heroes::COL_NAME_ID, HeroAliases::COL_NAME_HERO_ID)
            ->join(HeroBooks::TABLE_NAME, Heroes::COL_NAME_ID, HeroBooks::COL_NAME_HERO_ID)
            ->join(HeroTitles::TABLE_NAME, Heroes::COL_NAME_ID, HeroTitles::COL_NAME_HERO_ID)
            ->join(HeroTvSeries::TABLE_NAME, Heroes::COL_NAME_ID, HeroTvSeries::COL_NAME_HERO_ID)
            ->select(self::SELECT_FIELDS)->get();
    }
}
