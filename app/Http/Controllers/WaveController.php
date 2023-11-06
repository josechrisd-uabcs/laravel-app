<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaveController extends Controller
{
    public function __invoke($first_name, $last_name = "")
    {
        return view('user', [
            "givenName" => $first_name,
            "familyName" => $last_name
        ]);
    }
}
