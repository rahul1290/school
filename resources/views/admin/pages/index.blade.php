@extends('layouts.app')

@section('title', 'Admin - Manage Pages')

@section('content')
<div class="bg-slate-50 py-12 pt-28 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-3xl font-extrabold text-slate-900 font-['Outfit']">Manage Pages</h1>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm font-medium text-white bg-slate-800 px-4 py-2 rounded-lg hover:bg-slate-900 transition-colors">
                    Logout
                </button>
            </form>
        </div>
        
        <div class="flex space-x-4 border-b border-slate-200 mb-6 pb-2">
            <a href="{{ route('admin.admissions.index') }}" class="text-slate-500 hover:text-slate-700 font-medium px-2">Admissions</a>
            <a href="{{ route('admin.homepage.index') }}" class="text-slate-500 hover:text-slate-700 font-medium px-2">Homepage Sections</a>
            <a href="{{ route('admin.pages.index') }}" class="text-indigo-600 font-medium border-b-2 border-indigo-600 px-2">Pages</a>
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
                    @foreach($pages as $page)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $page->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">/{{ $page->slug }}</td>
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
