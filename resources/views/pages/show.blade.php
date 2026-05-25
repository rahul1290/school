@extends('layouts.app')

@section('title', $page->title . ' - Gyanoday Vidya Niketan')

@section('content')
<div class="bg-white min-h-screen">
    <div class="w-full">
        
        <!-- Header section -->
        <div class="bg-gradient-to-r from-slate-900 to-slate-800 py-16 px-4 md:px-8 text-center relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-white opacity-5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 rounded-full bg-white opacity-5 blur-2xl"></div>
            
            <h1 class="text-4xl md:text-5xl font-extrabold text-white font-['Outfit'] relative z-10">{{ $page->title }}</h1>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6 rounded-full relative z-10"></div>
        </div>

        <!-- Content section -->
        <div class="w-full px-6 md:px-12 lg:px-24 py-12 lg:py-16 prose prose-lg prose-slate max-w-none">
            {!! $page->content !!}
        </div>

        <!-- Map Section (if available) -->
        @if($page->map_iframe)
        <div class="w-full block flex" style="margin-bottom: -6px;">
            {!! str_replace('width="100%"', 'width="100%" style="border:0; width: 100vw;"', $page->map_iframe) !!}
        </div>
        @endif

    </div>
</div>
@endsection
