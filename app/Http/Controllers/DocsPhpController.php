<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsPhpController extends Controller
{
    public function php()
    {
        return view('site.docsphp');
    }
}
