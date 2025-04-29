<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPageController extends Controller
{

    public function __invoke()
    {
        return view('controller');

    }
}
