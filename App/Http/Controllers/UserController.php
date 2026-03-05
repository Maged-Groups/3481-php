<?php

namespace App\Http\Controllers;

class UserController extends Controller
{

    public static array $user = [
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

    public static array $users =
    [
        [
            'name' => 'Hadiel',
            'age' => 44
        ],
        [
            'name' => 'Monaliza',
            'age' => 14
        ],
        [
            'name' => 'Kareem',
            'age' => 10
        ],
        [
            'name' => 'Lobna',
            'age' => 23
        ],
        [
            'name' => 'Sama',
            'age' => 43
        ],
        [
            'name' => 'Mai',
            'age' => 43
        ],
        [
            'name' => 'Ramez',
            'age' => 43
        ],
        [
            'name' => 'Abd Elkareem',
            'age' => 43
        ],
        [
            'name' => 'Gamal Eldeen',
            'age' => 49
        ],
    ];

    public static array $numbers = [20, 35, 33, 6, 60, 88, 8, 61, 12, 66];

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

    public static function old_users()
    {
        // $big_numbers = array_filter(self::$numbers, function ($number) {
        //     return $number >= 30;
        // });

        $old_users = array_filter(self::$users, function ($user) {
            return $user['age'] >= 30;
        });

        // $old_users = array_map(function ($user) {}, self::$users);

        dump($old_users);
    }

    public static function shortNames () {
        // List all names less than 5 letters (strlen)
    }
}
