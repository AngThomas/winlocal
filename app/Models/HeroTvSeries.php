<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroTvSeries extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_tv_series',
        COL_NAME_ID = 'tv_serie_id',
        COL_NAME_HERO_ID = 'tv_serie_hero_id',
        COL_NAME_TV_SERIES = 'tv_serie',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;

    protected $fillable = [
        self::COL_NAME_HERO_ID,
        self::COL_NAME_TV_SERIES,
    ];

    protected $hidden = [
        self::COL_NAME_ID,
        self::COL_NAME_HERO_ID,
        'created_at',
        'updated_at',
    ];
}
