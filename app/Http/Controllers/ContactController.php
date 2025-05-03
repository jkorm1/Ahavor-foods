<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        $faqs = Faq::all(); // Fetch FAQs dynamically from the database
        return view('contact', compact('faqs'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'message' => 'required|string',
            'privacy' => 'required|accepted', // Ensures privacy checkbox is checked
        ]);

        // ✅ Store message in database
        ContactMessage::create($request->all());

        return redirect()->back()->with('success', 'Your message has been saved successfully!');
    }
}
