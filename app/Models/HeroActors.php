<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroActors extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_actors',
        COL_NAME_ID = 'actor_id',
        COL_NAME_HERO_ID = 'actors_hero_id',
        COL_NAME_PLAYED_BY = 'played_by',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;

    protected $fillable = [
        self::COL_NAME_HERO_ID,
        self::COL_NAME_PLAYED_BY,
    ];

    protected $hidden = [
        self::COL_NAME_ID,
        self::COL_NAME_HERO_ID,
        'created_at',
        'updated_at',
    ];


}
