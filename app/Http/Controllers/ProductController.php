<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $restaurants = [
            ['name' => 'Good Taste', 'cuisine' => 'Filipino', 'location' => 'Otek St.'],
            ['name' => 'Canto', 'cuisine' => 'American', 'location' => 'Kisad Rd.'],
            ['name' => 'Arcas Yard', 'cuisine' => 'Cafe', 'location' => 'Ambuklao Rd.'],
            ['name' => 'Foggy Mountain Cookhouse', 'cuisine' => 'Mediterranean', 'location' => 'San Carlos Heights.'],
            ['name' => 'Cafe by the Ruins', 'cuisine' => 'Filipino', 'location' => 'Shuntug Rd.'],
        ];
        
        return view('products.index', compact('restaurants'));
    }
}