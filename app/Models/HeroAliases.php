<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroAliases extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_aliases',
        COL_NAME_ID = 'id',
        COL_NAME_HERO_ID = 'hero_id',
        COL_NAME_ALIAS = 'alias',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;
}
