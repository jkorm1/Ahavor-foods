<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::all(); // Fetch team members from the database
        return view('about', compact('teamMembers'));
    }
}
