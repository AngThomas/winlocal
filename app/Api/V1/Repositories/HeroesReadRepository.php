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
use Illuminate\Pagination\LengthAwarePaginator;

class HeroesReadRepository
{
    private const RELATED_TABLES_FIELDS = [
        'alias',
        'title',
        'book',
        'tv_serie',
    ];

    public function getHeroes(array $searchFields): string|LengthAwarePaginator
    {
        $query = Heroes::with('heroAliases', 'heroTitles', 'heroTvSeries')
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
            });

        foreach ($searchFields as $fieldKey => $fieldVal){
            if (!in_array($fieldKey, self::RELATED_TABLES_FIELDS) && isset($fieldVal)){
                $query->where($fieldKey, 'like', "%{$fieldVal}%");
            }
        }

        $paginatedResult = $query->paginate(10, ['*'], 'ofVesteros');
        return $paginatedResult->isNotEmpty() ? $paginatedResult : "There is no hero with these characteristics.";
    }
}
