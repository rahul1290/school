<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_no' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $receiverEmail = \App\Models\Setting::where('key', 'contact_email_receiver')->value('value');
        
        if (!$receiverEmail) {
            $receiverEmail = config('mail.from.address', 'admin@example.com');
        }

        Mail::to($receiverEmail)->send(new ContactMessage($validated));

        return redirect()->back()->with('success', 'Mail successfully sent. Will be in your touch soon.');
    }
}
