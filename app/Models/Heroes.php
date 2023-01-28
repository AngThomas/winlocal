<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heroes extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero',
        COL_NAME_ID = 'id',
        COL_NAME_URL = 'url',
        COL_NAME_NAME = 'name',
        COL_NAME_GENDER = 'gender',
        COL_NAME_CULTURE = 'culture',
        COL_NAME_BORN = 'born',
        COL_NAME_DIED = 'died',
        COL_NAME_FATHER = 'father',
        COL_NAME_MOTHER = 'mother',
        COL_NAME_SPOUSE = 'spouse',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;

    protected $hidden = [
        self::COL_NAME_ID,
        'created_at',
        'updated_at',
    ];


    public function heroActors(){
       return $this->hasMany(HeroActors::class, HeroActors::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }

    public function heroAliases(){
        return $this->hasMany(HeroAliases::class, HeroAliases::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }

    public function heroAllegiances(){
        return $this->hasMany(HeroAllegiances::class, HeroAllegiances::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }

    public function heroBooks(){
        return $this->hasMany(HeroBooks::class, HeroBooks::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }

    public function heroPovBooks(){
        return $this->hasMany(HeroPovBooks::class, HeroPovBooks::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }

    public function heroTitles(){
        return $this->hasMany(HeroTitles::class, HeroTitles::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }

    public function heroTvSeries(){
        return $this->hasMany(HeroTvSeries::class, HeroTvSeries::COL_NAME_HERO_ID, self::PRIMARY_KEY);
    }
}
