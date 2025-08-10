<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('category-list', compact('categories'));
    }

    public function create()
    {
        return view('forms.add-category');
    }
}
