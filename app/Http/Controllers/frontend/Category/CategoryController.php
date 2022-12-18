<?php

namespace App\Http\Controllers\Frontend\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail(Category $category)
    {
        $data = [
            'title' => 'Detail Sub Kategori',
            'data' => $category
        ];

        return view('frontend.category.detail', $data);
    }
}
