<?php

namespace App\Helpers;

class HeroesHelper
{
    public const
        API_URL = 'https://anapioficeandfire.com/api/',
        GET_HEROES_ENDPOINT = self::API_URL.'characters?page=1&pageSize=50';

    public static function getHeroData(array $hero): array
    {
        return [
            'url'       => $hero['url'],
            'name'      => $hero['name'],
            'gender'    => $hero['gender'],
            'culture'   => $hero['culture'],
            'born'      => $hero['born'],
            'died'      => $hero['died'],
            'mother'    => $hero['mother'],
            'father'    => $hero['father'],
            'spouse'    => $hero['spouse'],
        ];
    }

}
