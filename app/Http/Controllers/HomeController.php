<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function removeWords()
    {
        $str = 'Welcome to "shouts.dev"';
        dd(str_replace('"', '', $str));
    }
}
