<?php

namespace App\Marwan\Models;

use mysqli;

class Model
{
    protected static string $table;

    protected static string $id;

    private bool $exists;

    private static function connect()
    {
        // Connection
        return new mysqli('localhost', 'root', '', 'ClassicModels');
    }

    public static function save()
    {
        return "App\Models\Model@save fired";
    }
    public static function delete()
    {
        return "App\Models\Model@delete fired";
    }
    public static function all()
    {

        $db = self::connect();

        $table = static::$table;

        // Run Query
        $res =  $db->query("SELECT * FROM $table;");

        // Fetch Data
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    protected static function beforeSave()
    {
        return "App\Models\Model@beforeSave fired";
    }
    private static function touch()
    {
        return "App\Models\Model@touch fired";
    }
}
