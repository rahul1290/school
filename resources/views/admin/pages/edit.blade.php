@extends('layouts.app')

@section('title', 'Admin - Edit Page')

@section('content')
<div class="bg-slate-50 py-12 pt-28 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.pages.index') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">&larr; Back to Pages</a>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm font-medium text-slate-600 hover:text-slate-900 bg-white px-4 py-2 rounded-lg border border-slate-200 shadow-sm transition-colors">
                    Logout
                </button>
            </form>
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
                        <label class="block text-sm font-bold text-slate-700 mb-1">Content (HTML allowed)</label>
                        <p class="text-xs text-slate-500 mb-2">You can use standard HTML tags like &lt;h2&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;strong&gt;, etc.</p>
                        <textarea name="content" rows="15" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 font-mono text-sm">{{ old('content', $page->content) }}</textarea>
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
