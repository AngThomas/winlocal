<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroPovBooks extends Model
{
    use HasFactory;

    public const
        TABLE_NAME = 'hero_pov_books',
        COL_NAME_ID = 'id',
        COL_NAME_HERO_ID = 'hero_id',
        COL_NAME_POV_BOOK_URL = 'pov_book_url',
        PRIMARY_KEY = self::COL_NAME_ID;

    protected $table = self::TABLE_NAME;
    protected $primaryKey = self::PRIMARY_KEY;
    protected $fillable = [
        self::COL_NAME_HERO_ID,
        self::COL_NAME_POV_BOOK_URL,
    ];
}
