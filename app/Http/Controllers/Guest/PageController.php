<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comics;

class PageController extends Controller
{
    public function index(){
        $comics = Comics::all();
        return view('home', compact('comics'));
    }
}
