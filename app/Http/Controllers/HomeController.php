<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $article = Article::all( 'id', 'title', 'short_description');
        return view('home', ['article' => $article]);
    }
}
