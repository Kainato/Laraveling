<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        // Carrega a view "home.blade.php" que está localizada no diretório "resources/views"
        return view('site.home');
    }
}