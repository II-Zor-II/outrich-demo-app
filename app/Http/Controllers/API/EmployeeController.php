<?php namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function get()
    {
        $employees = Employee::all()->toArray();
        return response()->json($employees);
    }
}
