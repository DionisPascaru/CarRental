<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show()
    {
//        return  [
//            'tag' => Tag::findOrFail($id, ['name'])
//        ];
        $tags = Tag::all('name', 'slug');
        return view('tag', ['tags' => $tags]);
    }
}
