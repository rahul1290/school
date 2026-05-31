<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'contact_email_receiver' => 'nullable|email',
        ]);

        \App\Models\Setting::updateOrCreate(
            ['key' => 'contact_email_receiver'],
            ['value' => $request->input('contact_email_receiver')]
        );

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
