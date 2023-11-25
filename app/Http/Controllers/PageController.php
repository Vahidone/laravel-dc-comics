<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $num_products = Comic::count();
        return view('home', compact('num_products'));
    }
}
