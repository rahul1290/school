<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Gyanoday Vidya Niketan')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    @php
        $primary = $global_settings['theme_primary_color'] ?? '#4f46e5';
        $secondary = $global_settings['theme_secondary_color'] ?? '#f59e0b';
        $headingFont = $global_settings['theme_heading_font'] ?? 'Outfit';
        $bodyFont = $global_settings['theme_body_font'] ?? 'Inter';
    @endphp

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family={{ urlencode($bodyFont) }}:wght@300;400;500;600;700&family={{ urlencode($headingFont) }}:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Slider -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Dynamic Theme Config -->
    <style>
        :root {
            --color-primary: {{ $primary }};
            --color-secondary: {{ $secondary }};
        }
        body {
            font-family: '{{ $bodyFont }}', sans-serif !important;
            background-color: #fcfcfc;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: '{{ $headingFont }}', sans-serif !important;
        }
    </style>

    <script>
        tailwind = {
            config: {
                theme: {
                    extend: {
                        colors: {
                            indigo: {
                                50: 'color-mix(in srgb, var(--color-primary) 10%, white)',
                                100: 'color-mix(in srgb, var(--color-primary) 20%, white)',
                                200: 'color-mix(in srgb, var(--color-primary) 40%, white)',
                                300: 'color-mix(in srgb, var(--color-primary) 60%, white)',
                                400: 'color-mix(in srgb, var(--color-primary) 80%, white)',
                                500: 'var(--color-primary)',
                                600: 'color-mix(in srgb, var(--color-primary) 85%, black)',
                                700: 'color-mix(in srgb, var(--color-primary) 70%, black)',
                                800: 'color-mix(in srgb, var(--color-primary) 55%, black)',
                                900: 'color-mix(in srgb, var(--color-primary) 40%, black)',
                            },
                            amber: {
                                500: 'var(--color-secondary)',
                                600: 'color-mix(in srgb, var(--color-secondary) 85%, black)',
                            },
                            orange: {
                                500: 'var(--color-secondary)',
                            }
                        }
                    }
                }
            }
        }
    </script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
    @stack('styles')
</head>
<body class="antialiased min-h-screen flex flex-col relative pt-0 pb-16 md:pb-20 bg-slate-50 selection:bg-indigo-500 selection:text-white">
    
    <!-- Global Background Watermark -->
    <div class="fixed inset-0 z-0 flex items-center justify-center pointer-events-none opacity-[0.03] print:hidden">
        <img src="{{ asset('images/logo.png') }}" alt="Background Watermark" class="w-[90%] md:w-[60%] max-w-4xl h-auto object-contain grayscale">
    </div>

    <!-- Mobile Header (Bottom) with Hamburger Menu -->
    <header x-data="{ open: false }" class="block md:hidden fixed bottom-0 left-0 w-full z-50 bg-gradient-to-r from-orange-500 to-red-500 border-t border-orange-600 shadow-lg pb-safe">
        <div class="px-4 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto object-contain bg-white rounded-full p-1 shadow-sm">
                <div>
                    <h1 class="text-lg font-bold text-white leading-tight font-['Outfit']">Gyanoday Vidya Niketan</h1>
                </div>
            </div>
            
            <!-- Hamburger Button (Three Lines) -->
            <button @click="open = !open" type="button" class="text-white hover:text-orange-200 focus:outline-none p-1.5 cursor-pointer">
                <svg class="w-6 h-6 transition-transform duration-300" :class="open ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <!-- Hamburger Icon Lines (hidden when open) -->
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    <!-- Close Icon X (shown when open) -->
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Dropdown Navigation Menu (Opening Upward) -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-4"
             style="display: none;"
             class="absolute bottom-full mb-1 left-0 w-full bg-white border-t border-slate-100 shadow-2xl py-3 px-4 space-y-1.5 rounded-t-2xl">
            <a href="{{ url('/') }}" class="block px-4 py-2.5 rounded-xl text-base {{ request()->is('/') ? 'bg-orange-50 text-orange-600 font-bold' : 'text-slate-700 hover:bg-slate-50 font-semibold' }}">Home</a>
            
            <!-- About subpages rendered inline as an accordion -->
            <div x-data="{ aboutOpen: {{ request()->is('about-us') || request()->is('aboutus/*') ? 'true' : 'false' }} }" class="space-y-1">
                <div class="w-full flex items-center justify-between px-4 py-2.5 rounded-xl hover:bg-slate-50 text-slate-700">
                    <a href="{{ url('/about-us') }}" class="text-base font-semibold flex-grow">About Us</a>
                    <button @click="aboutOpen = !aboutOpen" type="button" class="p-1 focus:outline-none cursor-pointer">
                        <svg class="w-4 h-4 transition-transform duration-200" :class="aboutOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                    </button>
                </div>
                <div x-show="aboutOpen" x-transition class="pl-4 space-y-1 border-l-2 border-orange-100 ml-4 mt-0.5" style="display: none;">
                    <a href="{{ url('/aboutus/our-history') }}" class="block px-4 py-2 rounded-lg text-sm {{ request()->is('aboutus/our-history') ? 'text-orange-600 font-bold bg-orange-50/50' : 'text-slate-600 hover:bg-slate-50 font-semibold' }}">Our History</a>
                    <a href="{{ url('/aboutus/campus') }}" class="block px-4 py-2 rounded-lg text-sm {{ request()->is('aboutus/campus') ? 'text-orange-600 font-bold bg-orange-50/50' : 'text-slate-600 hover:bg-slate-50 font-semibold' }}">Campus</a>
                    <a href="{{ url('/aboutus/achievements') }}" class="block px-4 py-2 rounded-lg text-sm {{ request()->is('aboutus/achievements') ? 'text-orange-600 font-bold bg-orange-50/50' : 'text-slate-600 hover:bg-slate-50 font-semibold' }}">Achievements</a>
                    <a href="{{ url('/aboutus/rules-and-regulations') }}" class="block px-4 py-2 rounded-lg text-sm {{ request()->is('aboutus/rules-and-regulations') ? 'text-orange-600 font-bold bg-orange-50/50' : 'text-slate-600 hover:bg-slate-50 font-semibold' }}">Rules & Regulations</a>
                </div>
            </div>

            <a href="{{ url('/admission') }}" class="block px-4 py-2.5 rounded-xl text-base {{ request()->is('admission') ? 'bg-orange-50 text-orange-600 font-bold' : 'text-slate-700 hover:bg-slate-50 font-semibold' }}">Admission</a>
            <a href="{{ url('/contact') }}" class="block px-4 py-2.5 rounded-xl text-base {{ request()->is('contact') ? 'bg-orange-50 text-orange-600 font-bold' : 'text-slate-700 hover:bg-slate-50 font-semibold' }}">Contact</a>
        </div>
    </header>

    <!-- Header / Bottom Nav with Glassmorphism -->
    <header class="hidden md:block fixed bottom-0 left-0 w-full z-50 bg-gradient-to-r from-orange-500 to-red-500 border-t border-orange-600 shadow-xl transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto object-contain bg-white rounded-full p-1 shadow-md">
                <div>
                    <h1 class="text-2xl font-bold text-white leading-tight">Gyanoday Vidya Niketan</h1>
                    <p class="text-sm text-right text-orange-100">A WAY OF SALVATION</p>
                </div>
            </div>
            
            <nav class="hidden md:flex gap-8 items-center">
                <a href="{{ url('/') }}" class="pb-1 border-b-2 transition-all {{ request()->is('/') ? 'text-yellow-200 font-bold border-yellow-300' : 'text-white border-transparent hover:text-orange-200 hover:border-orange-200 font-medium' }}">Home</a>
                
                <!-- About Dropdown Menu -->
                <div class="relative group py-2">
                    <a href="{{ url('/about-us') }}" class="pb-1 border-b-2 transition-all flex items-center gap-1 cursor-pointer {{ request()->is('about-us') || request()->is('aboutus/*') ? 'text-yellow-200 font-bold border-yellow-300' : 'text-white border-transparent hover:text-orange-200 hover:border-orange-200 font-medium' }}">
                        <span>About Us</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                    </a>
                    <!-- Dropdown Items (Opening Upward) -->
                    <div class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-56 rounded-2xl bg-white/95 backdrop-blur-md shadow-2xl py-2.5 border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <a href="{{ url('/aboutus/our-history') }}" class="block px-5 py-2.5 text-sm {{ request()->is('aboutus/our-history') ? 'text-orange-600 bg-orange-50 font-bold' : 'text-slate-700 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:text-white transition-colors font-semibold' }}">Our History</a>
                        <a href="{{ url('/aboutus/campus') }}" class="block px-5 py-2.5 text-sm {{ request()->is('aboutus/campus') ? 'text-orange-600 bg-orange-50 font-bold' : 'text-slate-700 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:text-white transition-colors font-semibold' }}">Campus</a>
                        <a href="{{ url('/aboutus/achievements') }}" class="block px-5 py-2.5 text-sm {{ request()->is('aboutus/achievements') ? 'text-orange-600 bg-orange-50 font-bold' : 'text-slate-700 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:text-white transition-colors font-semibold' }}">Achievements</a>
                        <a href="{{ url('/aboutus/rules-and-regulations') }}" class="block px-5 py-2.5 text-sm {{ request()->is('aboutus/rules-and-regulations') ? 'text-orange-600 bg-orange-50 font-bold' : 'text-slate-700 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:text-white transition-colors font-semibold' }}">Rules & Regulations</a>
                    </div>
                </div>

                <a href="{{ url('/admission') }}" class="pb-1 border-b-2 transition-all {{ request()->is('admission') ? 'text-yellow-200 font-bold border-yellow-300' : 'text-white border-transparent hover:text-orange-200 hover:border-orange-200 font-bold' }}">Admission</a>
                <a href="{{ url('/contact') }}" class="pb-1 border-b-2 transition-all {{ request()->is('contact') ? 'text-yellow-200 font-bold border-yellow-300' : 'text-white border-transparent hover:text-orange-200 hover:border-orange-200 font-medium' }}">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 pt-20 pb-24 lg:pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4 text-white font-['Outfit']">Gyanoday Vidya Niketan <br/>Deorbija</h2>
                <p class="text-slate-400 mb-8 max-w-xl mx-auto text-lg">Providing holistic education deeply rooted in traditional values and modern excellence.</p>
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    @if(!empty($global_settings['social_youtube_link']))
                    <!-- YouTube Channel -->
                    <a href="{{ $global_settings['social_youtube_link'] }}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-800 hover:bg-red-600 text-white rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium text-sm tracking-wide">YouTube Channel</span>
                    </a>
                    @endif
                    
                    @if(!empty($global_settings['social_app_link']))
                    <!-- Mobile App -->
                    <a href="{{ $global_settings['social_app_link'] }}" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-slate-800 hover:bg-indigo-500 text-white rounded-full transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        <span class="font-medium text-sm tracking-wide">Get Mobile App</span>
                    </a>
                    @endif
                </div>
                <div class="border-t border-slate-800/50 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-slate-500">&copy; {{ date('Y') }} Gyanoday Vidya Niketan. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bottom Sticky Menu -->
    {{-- @include('partials.footer_menu') --}}

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

</body>
</html>
