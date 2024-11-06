<?php

namespace App\Http\Controllers;

use App\Models\Writer; 
use Illuminate\Http\Request;

class WriterController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $writers = Writer::all(); 
        return view('writer.index', compact('writers')); 
    }
}
