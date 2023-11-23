<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){
        // per ottenere il numero di elementi presenti nel mio array
        $num_comics = Comic::count();
        return view('home' , compact('num_comics'));
    }
    public function contacts(){
        return view('contacts');
    }
}
