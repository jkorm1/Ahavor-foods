<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the blog posts.
     */
    public function index()
    {
        // In a real application, you would fetch blog posts from the database
        return view('blog');
    }

    /**
     * Display the specified blog post.
     */
    public function show($id)
    {
        // In a real application, you would fetch the blog post from the database
        return view('blog-post');
    }

    /**
     * Search for blog posts.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        // In a real application, you would search for blog posts
        return view('blog', ['query' => $query]);
    }

    /**
     * Submit a comment on a blog post.
     */
    public function submitComment(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'post_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
        ]);

        // In a real application, you would store the comment in the database

        return redirect()->back()->with('success', 'Your comment has been posted!');
    }

    /**
     * Subscribe to the newsletter.
     */
    public function subscribeNewsletter(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // In a real application, you would store the email in the database
        // or send it to a newsletter service

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}