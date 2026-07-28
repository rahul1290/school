@extends('layouts.admin')

@section('title', 'Admin - Manage Pages')

@section('content')
<div>
    <div>
        
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 font-['Outfit'] tracking-tight">Custom Pages</h1>
                <p class="text-slate-500 text-sm mt-1">Manage content pages, like About Us or Admissions details</p>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $parentPage = $pages->firstWhere('slug', 'about-us');
                        $childNodes = $pages->filter(function($p) {
                            return in_array($p->slug, ['establishment-objecties', 'campus', 'achievements', 'rules-and-regulations']);
                        });
                        $independentPages = $pages->filter(function($p) {
                            return !in_array($p->slug, ['about-us', 'establishment-objecties', 'campus', 'achievements', 'rules-and-regulations']);
                        });
                    @endphp

                    <!-- Parent: About Us -->
                    @if($parentPage)
                    <tr class="bg-slate-50/80">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-slate-900 flex items-center gap-2">
                            <span class="text-indigo-500 font-bold">📂</span> {{ $parentPage->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-600">/about-us</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $parentPage->updated_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.pages.edit', $parentPage) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <a href="{{ url('/about-us') }}" target="_blank" class="text-green-600 hover:text-green-900 ml-3">View</a>
                        </td>
                    </tr>
                    
                    <!-- Children of About Us -->
                    @foreach($childNodes as $child)
                    <tr class="hover:bg-slate-50/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700 pl-12 flex items-center gap-2">
                            <span class="text-slate-400 font-mono text-xs select-none">└──</span>
                            <span class="text-slate-500">📄</span> {{ $child->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-400 pl-10">/aboutus/{{ $child->slug }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $child->updated_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.pages.edit', $child) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <a href="{{ url('/aboutus/' . $child->slug) }}" target="_blank" class="text-green-600 hover:text-green-900 ml-3">View</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif

                    <!-- Independent Pages -->
                    @foreach($independentPages as $page)
                    <tr class="hover:bg-slate-50/30">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-800 flex items-center gap-2">
                            <span class="text-slate-500">📄</span> {{ $page->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-600">/{{ $page->slug }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $page->updated_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.pages.edit', $page) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <a href="{{ url('/' . $page->slug) }}" target="_blank" class="text-green-600 hover:text-green-900 ml-3">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
