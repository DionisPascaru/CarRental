<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        $category = Category::all('name', 'description');
        return view('category', ['categories' => $category]);
    }
}
