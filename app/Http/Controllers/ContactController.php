<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the Contact Us page.
     */
    public function show()
    {
        return view('pages.contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'email'   => 'nullable|email|max:150',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        // TODO: Send email or store in DB as needed.
        // For now, we flash a success message and redirect back.

        return redirect()->route('contact')->with('contact_success', true);
    }
}
