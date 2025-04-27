<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = Product::query()->with('category');
        
        // Apply filters if provided
        if ($request->has('category')) {
            $category = $request->query('category');
            $query->whereHas('category', function($q) use ($category) {
                $q->where('slug', $category);
            });
        }
        
        if ($request->has('search')) {
            $search = $request->query('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }
        
        // Sort products
        $sort = $request->query('sort', 'newest');
        
        switch ($sort) {
            case 'price_low':
                $query->orderBy('regular_price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('regular_price', 'desc');
                break;
            case 'name':
                $query->orderBy('name', 'asc');
                break;
            case 'newest':
            default:
                $query->latest();
                break;
        }
        
        $products = $query->paginate(12);
        $categories = Category::withCount('products')->get();
        
        return view('products', compact('products', 'categories'));
    }
    
    /**
     * Display products by category.
     *
     * @param  string  $category
     * @return \Illuminate\View\View
     */
    public function category($category)
    {
        $categoryModel = Category::where('slug', $category)->firstOrFail();
        
        $products = Product::whereHas('category', function($query) use ($category) {
            $query->where('slug', $category);
        })->paginate(12);
        
        $categories = Category::withCount('products')->get();
        
        return view('products', compact('products', 'categories', 'category', 'categoryModel'));
    }
    
    /**
     * Display the specified product.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('category', 'reviews')->firstOrFail();
        
        // Get related products
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();
        
        return view('product-detail', compact('product', 'relatedProducts'));
    }
}