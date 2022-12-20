<?php

namespace App\Http\Controllers\Frontend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sub Kategori',
            'categories' => Category::all()
        ];

        return view('frontend.category.index', $data);
    }
    public function detail(Category $category)
    {
        $data = [
            'title' => 'Detail Sub Kategori',
            'data' => $category
        ];

        return view('frontend.category.detail', $data);
    }
}
