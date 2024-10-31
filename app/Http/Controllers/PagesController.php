<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // Fetch the first featured product with images
        $featuredProduct = Product::with(['featuredImage', 'images'])
            ->where('quantity_in_stock', '>', 0)
            ->latest()
            ->first();

        // Fetch regular products
        $products = Product::with('featuredImage')
            ->where('quantity_in_stock', '>', 0)
            ->latest()
            ->take(8)
            ->get();

        return view('client.pages.index', compact('products', 'featuredProduct'));
    }

    public function shop()
    {
        return view('client.pages.shop');
    }

    public function about()
    {
        return view('client.pages.about');
    }

    public function contact()
    {
        return view('client.pages.contact');
    }





    public function show($slug)
    {
        // Find the product by slug and eager load related data
        $product = Product::with(['featuredImage', 'images', 'category'])
            ->where('slug', $slug)
            ->firstOrFail();

        // You might want to fetch related products from the same category
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('quantity_in_stock', '>', 0)
            ->take(4)
            ->get();

        return view('client.pages.product-details', compact('product', 'relatedProducts'));
    }

}
