@extends('layouts.app')

@section('title', $page->title . ' - Gyanoday Vidya Niketan')

@section('content')
<div class="bg-white min-h-screen">
    <div class="w-full">
        
        <!-- Header section -->
        <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-950 py-16 px-4 md:px-8 text-center relative overflow-hidden">
            <!-- Logo Watermark Background Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.06] pointer-events-none" 
                 style="background-image: url('{{ asset("images/logo.png") }}'); background-repeat: repeat; background-size: 70px 70px;">
            </div>

            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-white opacity-5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 rounded-full bg-white opacity-5 blur-2xl"></div>
            
            <h1 class="text-4xl md:text-5xl font-extrabold text-white font-['Outfit'] relative z-10">{{ $page->title }}</h1>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6 rounded-full relative z-10"></div>
        </div>

        <!-- Content section -->
        @if($page->map_iframe)
        <div class="max-w-[95%] xl:max-w-[90%] mx-auto px-4 md:px-8 py-8 lg:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                <!-- Address / Content section (takes 4 columns) -->
                <div class="lg:col-span-4 contact-container">
                    {!! $page->content !!}
                </div>
                
                <!-- Map section (takes the remaining 8 columns) -->
                <div class="lg:col-span-8 w-full rounded-[24px] overflow-hidden shadow-2xl border border-slate-100 h-[400px] md:h-[480px]">
                    {!! str_replace('width="100%"', 'width="100%" style="border:0; width: 100%; height: 100%; display: block;"', $page->map_iframe) !!}
                </div>
            </div>
        </div>

        <style>
            /* Override DB-seeded page layouts to fit perfectly in the side-by-side grid */
            .contact-container section.bg-gradient-to-br {
                background: none !important;
                padding: 0 !important;
            }
            .contact-container .max-w-5xl {
                max-width: 100% !important;
                margin: 0 !important;
            }
        </style>
        @else
        <div class="w-full px-6 md:px-12 lg:px-24 py-12 lg:py-16 prose prose-lg prose-slate max-w-none">
            {!! $page->content !!}
        </div>
        @endif

    </div>
</div>
@endsection
