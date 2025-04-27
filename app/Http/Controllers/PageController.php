<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function products()
    {
        // Return the products view instead of redirecting
        return view('products');
    }
    
    public function about()
    {
        // For now, redirect to home until about page is created
        return view('about');
    }
    
    public function blog()
    {
        // For now, we'll use dummy data until the database is set up
        $posts = collect([
            (object)[
                'slug' => 'healthy-breakfast-ideas',
                'title' => 'Healthy Breakfast Ideas',
                'excerpt' => 'Start your day right with these nutritious breakfast recipes.',
                'image' => 'images/blog/breakfast.jpg',
                'created_at' => now(),
                'category' => (object)['name' => 'Nutrition'],
                'author' => (object)['name' => 'John Doe']
            ],
            (object)[
                'slug' => 'benefits-of-whole-grains',
                'title' => 'Benefits of Whole Grains',
                'excerpt' => 'Discover why whole grains are essential for a healthy diet.',
                'image' => 'images/blog/grains.jpg',
                'created_at' => now()->subDays(2),
                'category' => (object)['name' => 'Health'],
                'author' => (object)['name' => 'Jane Smith']
            ]
        ]);

        // Convert the collection to a paginator
        $posts = new \Illuminate\Pagination\LengthAwarePaginator(
            $posts,
            $posts->count(),
            10, // items per page
            1, // current page
            ['path' => request()->url()]
        );

        $categories = collect([
            (object)['name' => 'Nutrition', 'slug' => 'nutrition', 'posts_count' => 5],
            (object)['name' => 'Health', 'slug' => 'health', 'posts_count' => 3],
            (object)['name' => 'Recipes', 'slug' => 'recipes', 'posts_count' => 4]
        ]);

        $recentPosts = $posts->take(3);

        $tags = collect([
            (object)['name' => 'Healthy', 'slug' => 'healthy'],
            (object)['name' => 'Breakfast', 'slug' => 'breakfast'],
            (object)['name' => 'Nutrition', 'slug' => 'nutrition']
        ]);

        return view('blog', compact('posts', 'categories', 'recentPosts', 'tags'));
    }

    public function blogDetail($slug)
    {
        // For now, we'll use dummy data until the database is set up
        $post = (object)[
            'slug' => $slug,
            'title' => 'Healthy Breakfast Ideas',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'image' => 'images/blog/breakfast.jpg',
            'created_at' => now(),
            'category' => (object)['name' => 'Nutrition', 'slug' => 'nutrition'],
            'author' => (object)['name' => 'John Doe']
        ];

        $relatedPosts = collect([
            (object)[
                'slug' => 'benefits-of-whole-grains',
                'title' => 'Benefits of Whole Grains',
                'excerpt' => 'Discover why whole grains are essential for a healthy diet.',
                'image' => 'images/blog/grains.jpg',
                'created_at' => now()->subDays(2),
                'category' => (object)['name' => 'Health'],
                'author' => (object)['name' => 'Jane Smith']
            ]
        ]);

        $categories = collect([
            (object)['name' => 'Nutrition', 'slug' => 'nutrition', 'posts_count' => 5],
            (object)['name' => 'Health', 'slug' => 'health', 'posts_count' => 3],
            (object)['name' => 'Recipes', 'slug' => 'recipes', 'posts_count' => 4]
        ]);

        $recentPosts = $relatedPosts->take(3);

        $tags = collect([
            (object)['name' => 'Healthy', 'slug' => 'healthy'],
            (object)['name' => 'Breakfast', 'slug' => 'breakfast'],
            (object)['name' => 'Nutrition', 'slug' => 'nutrition']
        ]);

        return view('blog-detail', compact('post', 'relatedPosts', 'categories', 'tags', 'recentPosts'));
    }

    public function blogCategory($slug)
    {
        // For now, we'll use dummy data until the database is set up
        $category = (object)[
            'name' => ucfirst($slug),
            'slug' => $slug,
            'description' => 'Articles about ' . ucfirst($slug)
        ];

        $posts = collect([
            (object)[
                'slug' => 'healthy-breakfast-ideas',
                'title' => 'Healthy Breakfast Ideas',
                'excerpt' => 'Start your day right with these nutritious breakfast recipes.',
                'image' => 'images/blog/breakfast.jpg',
                'created_at' => now(),
                'category' => (object)['name' => 'Nutrition'],
                'author' => (object)['name' => 'John Doe']
            ],
            (object)[
                'slug' => 'benefits-of-whole-grains',
                'title' => 'Benefits of Whole Grains',
                'excerpt' => 'Discover why whole grains are essential for a healthy diet.',
                'image' => 'images/blog/grains.jpg',
                'created_at' => now()->subDays(2),
                'category' => (object)['name' => 'Health'],
                'author' => (object)['name' => 'Jane Smith']
            ]
        ]);

        // Convert the collection to a paginator
        $posts = new \Illuminate\Pagination\LengthAwarePaginator(
            $posts,
            $posts->count(),
            10, // items per page
            1, // current page
            ['path' => request()->url()]
        );

        $categories = collect([
            (object)['name' => 'Nutrition', 'slug' => 'nutrition', 'posts_count' => 5],
            (object)['name' => 'Health', 'slug' => 'health', 'posts_count' => 3],
            (object)['name' => 'Recipes', 'slug' => 'recipes', 'posts_count' => 4]
        ]);

        $recentPosts = $posts->take(3);

        $tags = collect([
            (object)['name' => 'Healthy', 'slug' => 'healthy'],
            (object)['name' => 'Breakfast', 'slug' => 'breakfast'],
            (object)['name' => 'Nutrition', 'slug' => 'nutrition']
        ]);

        return view('blog', compact('category', 'posts', 'categories', 'recentPosts', 'tags'));
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'message' => 'required|string',
            'privacy' => 'required'
        ]);

        // Here you would typically:
        // 1. Save the message to your database
        // 2. Send an email notification
        // 3. Send an auto-reply to the customer

        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function subscribeNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email'
        ]);

        // Here you would typically save the email to your database
        // For now, we'll just redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}