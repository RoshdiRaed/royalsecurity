<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __invoke()
    {
        return view('clients');
    }
}

