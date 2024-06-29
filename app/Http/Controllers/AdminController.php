<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $productCount = Product::count();

        return view('admin.index', compact('categoryCount', 'productCount'));
      
    }
}
