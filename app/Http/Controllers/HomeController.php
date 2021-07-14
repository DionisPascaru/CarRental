<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latest = Article::orderBy('created_at', 'desc', 'id')->take(6)->get();

        return view('home', ['latest' => $latest]);
    }
}
