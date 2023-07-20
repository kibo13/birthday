<?php


namespace App\Enums;


class Role
{
    public const ADMIN = 1;
    public const ELDER = 2;
    public const USER  = 3;

    public const LIST = [
        [
            'id' => self::ADMIN,
            'name' => 'Админ',
            'slug' => 'admin',
        ],
        [
            'id' => self::ELDER,
            'name' => 'Староста',
            'slug' => 'elder',
        ],
        [
            'id' => self::USER,
            'name' => 'Пользователь',
            'slug' => 'user',
        ],
    ];
}
