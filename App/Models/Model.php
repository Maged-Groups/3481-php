<?php

namespace App\Models;

class Model
{
    protected static string $table;

    protected int $id;

    private bool $exists;

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
        return "App\Models\Model@all fired";
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
