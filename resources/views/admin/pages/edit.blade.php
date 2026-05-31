@extends('layouts.admin')

@section('title', 'Admin - Edit Page')

@section('content')
<div>
    <div>
        
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.pages.index') }}" class="text-indigo-600 hover:text-indigo-900 font-semibold flex items-center gap-2">
                &larr; Back to Pages List
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden mb-8">
            <div class="p-8 border-b border-slate-100 bg-slate-800">
                <h2 class="text-2xl font-bold text-white">Edit Page: {{ $page->title }} (/{{ $page->slug }})</h2>
            </div>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 m-8 mb-0 rounded relative" role="alert">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success') && session('success') !== 'your data has been stored')
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 m-8 mb-0 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('admin.pages.update', $page) }}" method="POST" class="p-8">
                @csrf
                @method('PUT')
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Page Title <span class="text-red-500">*</span></label>
                        <input type="text" name="title" value="{{ old('title', $page->title) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Content</label>
                        <p class="text-xs text-slate-500 mb-2">Use the editor to style text, insert lists, links, or click the **Source** button to edit raw HTML code.</p>
                        <textarea name="content" rows="15" class="ckeditor-enabled w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 text-sm">{{ old('content', $page->content) }}</textarea>
                    </div>

                    @if($page->slug === 'contact')
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-1">Google Map iframe URL</label>
                        <p class="text-xs text-slate-500 mb-2">Paste the entire &lt;iframe&gt; code from Google Maps here.</p>
                        <textarea name="map_iframe" rows="4" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 font-mono text-sm">{{ old('map_iframe', $page->map_iframe) }}</textarea>
                    </div>
                    @endif
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition-all">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
