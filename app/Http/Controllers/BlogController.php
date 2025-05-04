<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query()->with('category', 'author')->latest()->published();

        if ($request->has('category')) {
            $category = $request->query('category');
            $query->whereHas('category', function($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        if ($request->has('tag')) {
            $tag = $request->query('tag');
            $query->whereHas('tags', function($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }

        if ($request->has('search')) {
            $search = $request->query('search');
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
        }

        $posts = $query->paginate(9);
        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->limit(10)->get();
        $recentPosts = Post::latest()->published()->limit(5)->get();

        return view('blog', compact('posts', 'categories', 'tags', 'recentPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('category', 'author', 'tags')->firstOrFail();
        $relatedPosts = Post::where('category_id', $post->category_id)
                            ->where('id', '!=', $post->id)
                            ->latest()
                            ->limit(3)
                            ->get();
        
        $categories = Category::withCount('posts')->get(); // ✅ Ensure categories exist
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->limit(10)->get(); // ✅ Fetch tags
        $recentPosts = Post::latest()->published()->limit(5)->get(); // ✅ Add recent posts
    
        return view('blog-detail', compact('post', 'relatedPosts', 'categories', 'tags', 'recentPosts'));
    }
    
    

}
