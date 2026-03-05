<?php

namespace App\Http\Controllers;

class Controller
{
    protected static string $response;
    public static function arrays()
    {
        $str = 'Kareem';
        $num = 55;

        dump($str);
        dump($num);

        $num = 40;
        dump($num);

        $num = 2.33;
        dump($num);

        $int = (int) 3;
        dump($int);

        $int = '55';
        dump($int);

        $num = 'Hassan';
        dump($num);

        $arr_1 = [
            4,
            6,
            9,
            8,
            10,
            1,
            12,
            2,
            10
        ];

        dump($arr_1);

        $arr_2 = [
            'Soso',
            'Lolo',
            'Toto',
            'Mimi',
            'Zizi'
        ];
        dump($arr_2);

        $devices = [
            0 => 'Laptop',
            1 => 'PC',
            3 => 'Fan',
            4 => 'TV',
            2 => 'WiFi',
        ];
        dump($devices);

        $arr_4 =  [
            'First Name' => 'Gamal',
            'Last Name' => 'Moustafa',
            'Age' => 33,
            'City' => 'Cairo',
            'Country' => 'Egypt',
        ];
        dump($arr_4);

        dump($devices['4']);
        dump($devices[4]);
    }
    public static function show($id)
    {
        return "Show the id";
    }
    protected static function success($message)
    {
        return "You have succeded" ;
    }
    protected static function error($message)
    {
        // 
    }
}
