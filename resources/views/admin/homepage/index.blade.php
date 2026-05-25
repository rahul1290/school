@extends('layouts.app')

@section('title', 'Admin - Homepage Sections')

@section('content')
<div class="bg-slate-50 py-12 pt-28 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-3xl font-extrabold text-slate-900 font-['Outfit']">Homepage Sections</h1>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm font-medium text-slate-600 hover:text-slate-900 bg-white px-4 py-2 rounded-lg border border-slate-200 shadow-sm transition-colors">
                    Logout
                </button>
            </form>
        </div>
        
        <div class="flex space-x-4 border-b border-slate-200 mb-6 pb-2">
            <a href="{{ route('admin.admissions.index') }}" class="text-slate-500 hover:text-slate-700 font-medium px-2">Admissions</a>
            <a href="{{ route('admin.homepage.index') }}" class="text-indigo-600 font-medium border-b-2 border-indigo-600 px-2">Homepage Sections</a>
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
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Identifier</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($sections as $section)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">{{ $section->identifier }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $section->title ?? '(No Title)' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.homepage.edit', $section) }}" class="text-indigo-600 hover:text-indigo-900">Manage Section & Images</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection
