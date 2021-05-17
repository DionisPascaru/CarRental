<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
//        return  [
//            'category' => Category::findOrFail($id, ['name'])
//        ];

        $category = Category::all('name');
        return view('category', ['categories' => $category]);
    }
}
