<?php

namespace App\Http\Controllers;

class UserController extends Controller
{

    public static array $user =  [
        'First Name' => 'Gamal',
        'Last Name' => 'Moustafa',
        'Age' => 33,
        'address' => [
            'city' => 'Cairo',
            'country' => 'Egypt',
            'area' => 'Haram',
            'street' => 'Nasr Eldeen',
            'no.' => 33
        ],
    ];

    public static function add()
    {
        self::$user['title'] = 'Mr.';
        self::$user['address']['floor'] = 12;
        self::$user['bank']['name'] = 'Arab Europe Bank';

        dump(self::$user);
    }

    public static function store()
    {
        // 
    }
    public static function destroy($id)
    {
        // 
    }
}
