<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsHtmlController extends Controller
{
    public function html()
    {
        return view('site.docshtml');
    }
}
