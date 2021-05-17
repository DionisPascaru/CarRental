<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {

        $images = Article::find($id)->images->select('path')->where('article_id', '=', $id)->get();
        $article = Article::find($id);

        return view('article', ['article' => $article, 'images' => $images]);
    }
}
