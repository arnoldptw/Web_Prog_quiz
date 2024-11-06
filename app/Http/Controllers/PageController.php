<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        return view('pages.show', compact('slug')); 
    }
}
