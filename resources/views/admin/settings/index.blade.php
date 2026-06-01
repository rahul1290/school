@extends('layouts.admin')

@section('title', 'Admin - Settings')

@section('content')
<div>
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-slate-800 tracking-tight">System Settings</h1>
        <p class="text-slate-500 mt-1">Manage global configurations for your website.</p>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-6 rounded-lg relative" role="alert">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-6 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow-sm rounded-2xl border border-slate-200 overflow-hidden">
        <form action="{{ route('admin.settings.update') }}" method="POST" class="p-8">
            @csrf
            @method('PUT')
            
            <div class="space-y-8">
                <!-- Contact Form Settings -->
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-4 pb-2 border-b border-slate-100">Contact Form Settings</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Receiver Email Address</label>
                            <p class="text-xs text-slate-500 mb-2">The email address where "Write to us" submissions will be sent.</p>
                            <input type="email" name="contact_email_receiver" value="{{ old('contact_email_receiver', $settings['contact_email_receiver'] ?? '') }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="e.g. admin@gyanodayvidyaniketan.edu.in">
                        </div>
                    </div>
                </div>
                
                <!-- Theme Settings -->
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-4 pb-2 border-b border-slate-100">Theme Settings</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Primary Color -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Primary Color (Indigo)</label>
                            <p class="text-xs text-slate-500 mb-2">Used for buttons, primary links, and main highlights.</p>
                            <div class="flex items-center gap-3">
                                <input type="color" name="theme_primary_color" value="{{ old('theme_primary_color', $settings['theme_primary_color'] ?? '#4f46e5') }}" class="h-10 w-14 rounded cursor-pointer border border-slate-300 p-1">
                                <input type="text" name="theme_primary_color" value="{{ old('theme_primary_color', $settings['theme_primary_color'] ?? '#4f46e5') }}" class="flex-1 px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 uppercase" placeholder="#4f46e5" oninput="this.previousElementSibling.value = this.value">
                            </div>
                        </div>

                        <!-- Secondary Color -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Secondary Color (Amber)</label>
                            <p class="text-xs text-slate-500 mb-2">Used for accents, secondary buttons, and specific highlights.</p>
                            <div class="flex items-center gap-3">
                                <input type="color" name="theme_secondary_color" value="{{ old('theme_secondary_color', $settings['theme_secondary_color'] ?? '#f59e0b') }}" class="h-10 w-14 rounded cursor-pointer border border-slate-300 p-1">
                                <input type="text" name="theme_secondary_color" value="{{ old('theme_secondary_color', $settings['theme_secondary_color'] ?? '#f59e0b') }}" class="flex-1 px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 uppercase" placeholder="#f59e0b" oninput="this.previousElementSibling.value = this.value">
                            </div>
                        </div>

                        <!-- Heading Font -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Heading Font</label>
                            <p class="text-xs text-slate-500 mb-2">Select the font used for titles and headers.</p>
                            @php
                                $googleFonts = [
                                    'Abel', 'Acme', 'Anton', 'Archivo', 'Arimo', 'Asap', 'Assistant', 'Barlow', 'Bebas Neue', 
                                    'Bitter', 'Cabin', 'Caveat', 'Comfortaa', 'Crimson Text', 'Dancing Script', 'Dosis', 
                                    'Exo 2', 'Fira Sans', 'Fjalla One', 'Heebo', 'Hind', 'Hind Siliguri', 'Inconsolata', 
                                    'Inter', 'Josefin Sans', 'Kanit', 'Karla', 'Lato', 'Libre Baskerville', 'Lobster', 
                                    'Lora', 'Manrope', 'Merriweather', 'Montserrat', 'Mukta', 'Muli', 'Noto Sans', 
                                    'Noto Serif', 'Nunito', 'Nunito Sans', 'Open Sans', 'Oswald', 'Outfit', 'Oxygen', 
                                    'Pacifico', 'Playfair Display', 'Poppins', 'PT Sans', 'PT Serif', 'Quicksand', 
                                    'Raleway', 'Righteous', 'Roboto', 'Roboto Condensed', 'Rubik', 'Shadows Into Light', 
                                    'Signika', 'Slabo 27px', 'Source Sans Pro', 'Teko', 'Titillium Web', 'Ubuntu', 
                                    'Varela Round', 'Work Sans', 'Yanone Kaffeesatz', 'Zilla Slab'
                                ];
                                sort($googleFonts);
                            @endphp
                            <select name="theme_heading_font" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                @php $headingFont = old('theme_heading_font', $settings['theme_heading_font'] ?? 'Outfit'); @endphp
                                @foreach($googleFonts as $font)
                                    <option value="{{ $font }}" {{ $headingFont == $font ? 'selected' : '' }}>{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Body Font -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Body Font</label>
                            <p class="text-xs text-slate-500 mb-2">Select the font used for general paragraph text.</p>
                            <select name="theme_body_font" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                @php $bodyFont = old('theme_body_font', $settings['theme_body_font'] ?? 'Inter'); @endphp
                                @foreach($googleFonts as $font)
                                    <option value="{{ $font }}" {{ $bodyFont == $font ? 'selected' : '' }}>{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Social & App Links -->
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-4 pb-2 border-b border-slate-100">Social & App Links</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">YouTube Channel Link</label>
                            <p class="text-xs text-slate-500 mb-2">The URL for your YouTube channel. Leave blank to hide the button.</p>
                            <input type="url" name="social_youtube_link" value="{{ old('social_youtube_link', $settings['social_youtube_link'] ?? '') }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="https://youtube.com/...">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Mobile App Download Link</label>
                            <p class="text-xs text-slate-500 mb-2">The URL for your Mobile App. Leave blank to hide the button.</p>
                            <input type="url" name="social_app_link" value="{{ old('social_app_link', $settings['social_app_link'] ?? '') }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="https://play.google.com/...">
                        </div>
                    </div>
                </div>

                <!-- Future Settings can be added here -->
            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-md hover:bg-indigo-700 hover:-translate-y-0.5 transition-all">
                    Save Settings
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
