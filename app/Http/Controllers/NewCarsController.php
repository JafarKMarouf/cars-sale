<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NewCarsController extends Controller
{
    public function index():View
    {
        return view('new_cars.index');
    }
}
