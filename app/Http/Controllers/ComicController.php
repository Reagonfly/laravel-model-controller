<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Richiamo Comic
use App\Models\Comic as Comic;

class ComicController extends Controller
//Esercizio base
{
    public function getAllCards()
    {
        $products = Comic::all();
        $menu = config('comics.menu');
        $icon = config('comics.icon');
        $social = config('comics.social');
        return view('main', compact('products', 'menu', 'icon', 'social'));
    }
}
