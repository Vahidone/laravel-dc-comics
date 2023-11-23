<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about_us() {
        return view('about_us');
    }

    public function details($id) {

        $comic = Comic::find($id);

        return view('details', compact('comic'));
    }



}
