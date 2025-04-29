<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationMenuController extends Controller
{
    public function __invoke()
    {
        return view('navigation-menu');
    }
}
