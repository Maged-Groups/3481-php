<?php

namespace App\Models;

class user extends Model
{
    protected static string $table = 'users';

    public static string $name;

    protected static string $email;

    private static string $password;

    public static function setPassword()
    {
        return 'App\Models\User@setPassword';
    }
    public static function getEmail()
    {
        return 'App\Models\User@getEmail';
    }
}
