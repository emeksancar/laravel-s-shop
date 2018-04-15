<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::whereRaw('sub_id is null')->take(9)->get();
        return view('pages.category-list', compact('categories'));
    }
    public function category($slug_category_name) {
        $categories = Category::whereRaw('sub_id is null')->take(9)->get();
        $main_category = Category::where('slug', '=', $slug_category_name)->firstOrFail();
        $sub_categories = Category::where('sub_id', '=', $main_category->id)->get();

        $products = $main_category->products;
        return view('pages.category', compact('categories', 'main_category', 'sub_categories', 'products'));
    }
    public function subCategory($slug_category_name, $slug_sub_category_name) {
        $categories = Category::whereRaw('sub_id is null')->take(9)->get();
        $main_category = Category::where('slug', '=', $slug_category_name)->firstOrFail();
        $sub_category = Category::where('slug', '=', $slug_sub_category_name)->firstOrFail();
        $products = $sub_category->products;
        return view('pages.sub_category', compact('categories', 'main_category', 'sub_category', 'products'));
    }
}
