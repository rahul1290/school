@extends('layouts.admin')

@section('title', 'Admin - Manage Section')

@section('content')
<div>
    <div>
        
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.homepage.index') }}" class="text-indigo-600 hover:text-indigo-900 font-semibold flex items-center gap-2">
                &larr; Back to Sections List
            </a>
        </div>

        @if(session('success') && session('success') !== 'your data has been stored')
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        @if($errors->any())
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white shadow rounded-lg mb-8 p-6 border border-slate-100">
            <h2 class="text-xl font-bold text-slate-900 mb-6 font-['Outfit']">Manage Section Content: {{ ucfirst($section->identifier) }}</h2>
            
            <form action="{{ route('admin.homepage.update', $section) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Title</label>
                    <input type="text" name="title" value="{{ old('title', $section->title) }}" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Top Subtitle</label>
                    <input type="text" name="subtitle_top" value="{{ old('subtitle_top', $section->subtitle_top) }}" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Bottom Subtitle</label>
                    <input type="text" name="subtitle_bottom" value="{{ old('subtitle_bottom', $section->subtitle_bottom) }}" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
                
                <div class="pt-4 border-t border-slate-100">
                    <h3 class="text-lg font-medium text-slate-800 mb-4">Section Styling Override (Optional)</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Title Font</label>
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
                            <select name="title_font" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="">Default (Inherit from Settings)</option>
                                @php $titleFont = old('title_font', $section->title_font); @endphp
                                @foreach($googleFonts as $font)
                                    <option value="{{ $font }}" {{ $titleFont == $font ? 'selected' : '' }}>{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Title Color</label>
                            <div class="flex items-center gap-2">
                                <input type="color" value="{{ old('title_color', $section->title_color ?? '#000000') }}" class="h-9 w-12 rounded cursor-pointer border border-slate-300 p-0.5" oninput="this.nextElementSibling.value = this.value">
                                <input type="text" name="title_color" value="{{ old('title_color', $section->title_color) }}" class="flex-1 px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 text-sm uppercase" placeholder="e.g. #000000" oninput="this.previousElementSibling.value = this.value || '#000000'">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Subtitle Color</label>
                            <div class="flex items-center gap-2">
                                <input type="color" value="{{ old('subtitle_color', $section->subtitle_color ?? '#000000') }}" class="h-9 w-12 rounded cursor-pointer border border-slate-300 p-0.5" oninput="this.nextElementSibling.value = this.value">
                                <input type="text" name="subtitle_color" value="{{ old('subtitle_color', $section->subtitle_color) }}" class="flex-1 px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 text-sm uppercase" placeholder="e.g. #4f46e5" oninput="this.previousElementSibling.value = this.value || '#000000'">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors">
                        Save Content
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white shadow rounded-lg mb-8 p-6 border border-slate-100">
            <h2 class="text-xl font-bold text-slate-900 mb-6 font-['Outfit']">Add New Image</h2>
            
            <form action="{{ route('admin.homepage.uploadImage', $section) }}" method="POST" enctype="multipart/form-data" class="flex gap-4 items-end">
                @csrf
                <div class="flex-grow">
                    <label class="block text-sm font-medium text-slate-700 mb-1">Select Image</label>
                    <input type="file" name="image" required class="w-full px-3 py-2 border border-slate-300 rounded-lg bg-white">
                </div>
                <button type="submit" class="bg-green-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                    Upload
                </button>
            </form>
        </div>

        <div class="bg-white shadow rounded-lg p-6 border border-slate-100">
            <h2 class="text-xl font-bold text-slate-900 mb-6 font-['Outfit']">Manage Existing Images</h2>
            
            @if($section->images->isEmpty())
                <p class="text-slate-500">No images uploaded for this section yet.</p>
            @else
                <form action="{{ route('admin.homepage.updateImages', $section) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                        @foreach($section->images as $img)
                            <div class="border border-slate-200 rounded-lg p-3 relative bg-slate-50">
                                <img src="{{ asset($img->image_path) }}" class="w-full h-32 object-cover rounded mb-3 border border-slate-300">
                                
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center">
                                        <label class="text-xs font-medium text-slate-700">Sort Order:</label>
                                        <input type="number" name="images[{{ $img->id }}][sort_order]" value="{{ $img->sort_order }}" class="w-16 px-2 py-1 text-sm border border-slate-300 rounded text-center">
                                    </div>
                                    
                                    <div class="flex justify-between items-center">
                                        <label class="text-xs font-medium text-slate-700">Active (Show):</label>
                                        <input type="checkbox" name="images[{{ $img->id }}][is_active]" value="1" {{ $img->is_active ? 'checked' : '' }} class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                                    </div>

                                    <div class="flex justify-between items-center border-t border-slate-200 pt-2 mt-2">
                                        <label class="text-xs font-medium text-red-600">Delete Image:</label>
                                        <input type="checkbox" name="images[{{ $img->id }}][delete]" value="1" class="rounded border-red-300 text-red-600 focus:ring-red-500">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white font-medium py-2 px-6 rounded-lg hover:bg-indigo-700 transition-colors">
                            Update Images Settings
                        </button>
                    </div>
                </form>
            @endif
        </div>
        
    </div>
</div>
@endsection
