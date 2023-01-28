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

class HeroesWriteRepository
{
    private Heroes $heroes;

    public function  writeHero(array $heroData): self
    {
        $this->heroes = new Heroes();
        $this->heroes->url =  $heroData[Heroes::COL_NAME_URL];
        $this->heroes->name =  $heroData[Heroes::COL_NAME_NAME];
        $this->heroes->gender =  $heroData[Heroes::COL_NAME_GENDER];
        $this->heroes->culture =  $heroData[Heroes::COL_NAME_CULTURE];
        $this->heroes->born =  $heroData[Heroes::COL_NAME_BORN];
        $this->heroes->died =  $heroData[Heroes::COL_NAME_DIED];
        $this->heroes->mother =  $heroData[Heroes::COL_NAME_MOTHER];
        $this->heroes->father =  $heroData[Heroes::COL_NAME_FATHER];
        $this->heroes->spouse =  $heroData[Heroes::COL_NAME_SPOUSE];
        $this->heroes->save();

        return $this;
    }

    public function writeHeroActors(array $heroActors): self
    {
        if (!empty($heroActors)) {
            foreach ($heroActors as $heroActor) {
                $actorsToSave[] = new HeroActors([
                    HeroActors::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroActors::COL_NAME_PLAYED_BY => $heroActor,
                ]);
            }

            $this->heroes->heroActors()->saveMany($actorsToSave);
        }

        return $this;
    }

    public function writeHeroAliases(array $heroAliases): self
    {
        if (!empty($heroAliases)) {
            foreach ($heroAliases as $heroAlias) {
                $aliasesToSave[] = new HeroAliases([
                    HeroAliases::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroAliases::COL_NAME_ALIAS => $heroAlias,
                    ]);
            }

            $this->heroes->heroAliases()->saveMany($aliasesToSave);
        }

        return $this;
    }

    public function writeHeroAllegiances(array $heroAllegiances): self
    {
        if (!empty($heroAllegiances)) {
            foreach ($heroAllegiances as $heroAllegiance) {
                $allegiancesToSave[] = new HeroAllegiances([
                    HeroAllegiances::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroAllegiances::COL_NAME_ALLEGIANCE => $heroAllegiance,
                ]);
            }

            $this->heroes->heroAllegiances()->saveMany($allegiancesToSave);
        }

        return $this;
    }

    public function writeHeroBooks(array $heroBooks): self
    {
        if (!empty($heroBooks)) {
            foreach ($heroBooks as $heroBook) {
                $booksToSave[] = new HeroBooks([
                    HeroBooks::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroBooks::COL_NAME_BOOK_URL => $heroBook,
                ]);
            }

            $this->heroes->heroBooks()->saveMany($booksToSave);
        }

        return $this;
    }

    public function writeHeroPovBooks(array $heroPovBooks): self
    {
        if (!empty($heroPovBooks)) {
            foreach ($heroPovBooks as $heroPovBook) {
                $povBooksToSave[] = new HeroPovBooks([
                    HeroPovBooks::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroPovBooks::COL_NAME_POV_BOOK_URL => $heroPovBook,
                ]);
            }

            $this->heroes->heroPovBooks()->saveMany($povBooksToSave);
        }

        return $this;
    }

    public function writeHeroTitles(array $heroTitles): self
    {
        if (!empty($heroTitles)) {
            foreach ($heroTitles as $heroTitle) {
                $titlesToSave[] = new HeroTitles([
                    HeroTitles::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroTitles::COL_NAME_TITLE => $heroTitle,
                ]);
            }

            $this->heroes->heroTitles()->saveMany($titlesToSave);
        }

        return $this;
    }

    public function writeHeroTvSeries(array $heroTvSeries): self
    {
        if (!empty($heroTvSeries)) {
            foreach ($heroTvSeries as $heroTvSerie) {
                $tvSeriesToSave[] = new HeroTvSeries([
                    HeroTvSeries::COL_NAME_HERO_ID => $this->heroes->id,
                    HeroTvSeries::COL_NAME_TV_SERIES => $heroTvSerie,
                ]);
            }

            $this->heroes->heroTvSeries()->saveMany($tvSeriesToSave);
        }

        return $this;
    }



}
