<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroAllegiances extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_allegiances',
        COL_NAME_ID = 'allegiance_id',
        COL_NAME_HERO_ID = 'allegiance_hero_id',
        COL_NAME_ALLEGIANCE = 'allegiance',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;
    protected $fillable = [
        self::COL_NAME_HERO_ID,
        self::COL_NAME_ALLEGIANCE,
    ];

    protected $hidden = [
        self::COL_NAME_ID,
        self::COL_NAME_HERO_ID,
        'created_at',
        'updated_at',
    ];
}
