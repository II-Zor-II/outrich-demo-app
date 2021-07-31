<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        return view('employee');
    }

    public function error()
    {
        return view('error');
    }
    
}
