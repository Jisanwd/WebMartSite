<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'categories' => Category::where('status',1)->get(),
            'products'  => Product::where('status',1)->orderBy('id', 'desc')->take(6)->get(),
            ]);
    }
    public function category($id)
    {
        return view('website.category.index', [
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get(),
            ]);
    }
    public function subCategory($id)
    {
        return view('website.category.index', [
            'products' => Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function detail($id)
    {
        return view('website.detail.index', ['product' => Product::find($id)]);
    }
}
