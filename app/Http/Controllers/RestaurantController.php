<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }


    //
}
