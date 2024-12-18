<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\BestSeller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $bestseller = BestSeller::all()->take(6);
        return view('home', compact('bestseller'));
    }

    public function about()
    {
        return view('about');
    }

    public function ourWork(Request $request)
    {
        $categories = Category::all();
        $products = Product::query()
            ->when($request->category, function ($query, $category) {
                return $query->whereHas('category', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->with('category')
            ->latest()
            ->paginate(12);
            
        return view('our-work', compact('categories', 'products'));
    }

    public function contact()
    {
        return view('contact');
    }
}
