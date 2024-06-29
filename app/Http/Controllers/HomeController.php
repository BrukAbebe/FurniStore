<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('user.index')
        ->with('categories', $categories)
        ->with('products', $products);
    }
}
