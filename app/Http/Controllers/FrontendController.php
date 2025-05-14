<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $about = About::first();
        $features=Feature::limit(4)->get();
        $categories = Category::first();
        $products = Product::with('category')->get();
        return view('welcome',compact('about', 'features','products','categories'));

    }

    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function home()
    {
        return view('welcome');
    }
    public function category()
    {
        return view('frontend.category');
    }
    public function product()
    {
        return view('frontend.product');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function productDetail(Product $product)
    {
        $product->load('files');
        return view('frontend.product',compact('product'));
    }


}
