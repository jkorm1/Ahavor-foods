<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = Post::query()->with('category', 'author')->published();
        
        // Filter by category if provided
        if ($request->has('category')) {
            $category = $request->query('category');
            $query->whereHas('category', function($q) use ($category) {
                $q->where('slug', $category);
            });
        }
        
        // Filter by tag if provided
        if ($request->has('tag')) {
            $tag = $request->query('tag');
            $query->whereHas('tags', function($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }
        
        // Filter by search if provided
        if ($request->has('search')) {
            $search = $request->query('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        $posts = $query->latest()->paginate(9);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->limit(10)->get();
        $recentPosts = Post::published()->latest()->limit(5)->get();
        
        return view('blog', compact('posts', 'categories', 'tags', 'recentPosts'));
    }
    
    /**
     * Display posts by category.
     *
     * @param  string  $category
     * @return \Illuminate\View\View
     */
    public function category($category)
    {
        $categoryModel = Category::where('slug', $category)->firstOrFail();
        
        $posts = Post::whereHas('category', function($query) use ($category) {
            $query->where('slug', $category);
        })->published()->latest()->paginate(9);
        
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->limit(10)->get();
        $recentPosts = Post::published()->latest()->limit(5)->get();
        
        return view('blog', compact('posts', 'categories', 'tags', 'recentPosts', 'category', 'categoryModel'));
    }
    
    /**
     * Display the specified blog post.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->published()->firstOrFail();
        
        // Get related posts
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->published()
            ->latest()
            ->limit(3)
            ->get();
        
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->limit(10)->get();
        $recentPosts = Post::published()->latest()->limit(5)->get();
        
        return view('blog-detail', compact('post', 'relatedPosts', 'categories', 'tags', 'recentPosts'));
    }
}
