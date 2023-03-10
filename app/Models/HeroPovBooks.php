<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroPovBooks extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_pov_books',
        COL_NAME_ID = 'pov_book_id',
        COL_NAME_HERO_ID = 'pov_book_hero_id',
        COL_NAME_POV_BOOK_URL = 'pov_book_url',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;
    protected $fillable = [
        self::COL_NAME_HERO_ID,
        self::COL_NAME_POV_BOOK_URL,
    ];

    protected $hidden = [
        self::COL_NAME_ID,
        self::COL_NAME_HERO_ID,
        'created_at',
        'updated_at',
    ];
}
