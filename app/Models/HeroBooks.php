<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroBooks extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_books',
        COL_NAME_ID = 'book_id',
        COL_NAME_HERO_ID = 'book_hero_id',
        COL_NAME_BOOK_URL = 'book_url',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;
    protected $fillable = [
        self::COL_NAME_HERO_ID,
        self::COL_NAME_BOOK_URL,
    ];

    protected $hidden = [
        self::COL_NAME_ID,
        self::COL_NAME_HERO_ID,
        'created_at',
        'updated_at',
    ];
}
