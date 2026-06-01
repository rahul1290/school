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
            'theme_primary_color' => 'nullable|string|max:20',
            'theme_secondary_color' => 'nullable|string|max:20',
            'theme_heading_font' => 'nullable|string|max:100',
            'theme_body_font' => 'nullable|string|max:100',
            'social_youtube_link' => 'nullable|url|max:255',
            'social_app_link' => 'nullable|url|max:255',
        ]);

        $settings = [
            'contact_email_receiver',
            'theme_primary_color',
            'theme_secondary_color',
            'theme_heading_font',
            'theme_body_font',
            'social_youtube_link',
            'social_app_link'
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(
                ['key' => $setting],
                ['value' => $request->input($setting)]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
