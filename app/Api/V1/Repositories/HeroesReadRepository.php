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

    public function getHeroes(array $searchFields)
    {
        return Heroes::with('heroAliases', 'heroTitles', 'heroTvSeries')
            ->whereHas('heroAliases', function ($query) use ($searchFields) {
                if (isset($searchFields['alias'])) {
                    $query->where('alias', 'like', '%'.$searchFields['alias'].'%');
                }
            })
            ->whereHas('heroTitles', function ($query) use ($searchFields) {
                if (isset($searchFields['title'])) {
                    $query->where('title', 'like', '%' . $searchFields['title'] . '%');
                }
            })
            ->whereHas('heroTvSeries', function ($query) use ($searchFields) {
                if (isset($searchFields['tv_serie'])) {
                    $query->where('tv_serie', 'like', '%' . $searchFields['tv_serie'] . '%');
                }
            })->paginate(10);
    }
}
