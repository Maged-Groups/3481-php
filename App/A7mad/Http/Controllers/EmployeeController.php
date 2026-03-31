<?php

namespace App\Maged\Http\Controllers;

use App\Maged\Models\Employee;

class EmployeeController extends Controller
{
    public static function list_all()
    {
        // Get data from Model
        $employees = Employee::all();

        $json = json_encode($employees);

        // return
        return $json;
    }
}
