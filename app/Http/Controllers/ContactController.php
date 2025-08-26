<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|num|max:20',
            'message' => 'required|string',
        ]);

        ContactSubmission::create($validated);

        return Redirect::route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
