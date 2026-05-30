@extends('layouts.app')

@section('title', 'Admin - Manage Section')

@section('content')
<div class="bg-slate-50 py-12 pt-28 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-2">
            <a href="{{ route('admin.homepage.index') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">&larr; Back to Sections</a>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm font-medium text-slate-600 hover:text-slate-900 bg-white px-4 py-2 rounded-lg border border-slate-200 shadow-sm transition-colors">
                    Logout
                </button>
            </form>
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
