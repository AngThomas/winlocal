<?php

namespace App\Helpers;

class HeroesHelper
{
    public const
        API_URL = 'https://anapioficeandfire.com/api/',
        GET_HEROES_ENDPOINT = self::API_URL.'characters?page=1&pageSize=50';
}
