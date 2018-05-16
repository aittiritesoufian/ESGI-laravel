<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallController extends Controller
{
    public function show($search = "")
    {
    	return view('show', ['search' => $search]);
    }

    public function write()
    {
    	echo "soon...";
    }
}
