<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Gyanoday Vidya Niketan')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js for Slider -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfcfc;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col relative pb-20 bg-slate-50 selection:bg-indigo-500 selection:text-white">
    
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
            
            <nav class="hidden md:flex gap-8">
                <a href="{{ url('/') }}" class="text-white hover:text-orange-200 font-medium transition-colors">Home</a>
                <a href="{{ url('/#about') }}" class="text-white hover:text-orange-200 font-medium transition-colors">About Us</a>
                <a href="{{ url('/#academics') }}" class="text-white hover:text-orange-200 font-medium transition-colors">Academics</a>
                <a href="{{ url('/admission') }}" class="text-white hover:text-orange-200 font-bold transition-colors">Admission</a>
                <a href="{{ url('/#contact') }}" class="text-white hover:text-orange-200 font-medium transition-colors">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 pt-20 pb-24 lg:pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4 text-white font-['Outfit']">Gyanoday Vidya Niketan</h2>
                <p class="text-slate-400 mb-8 max-w-xl mx-auto text-lg">Providing holistic education deeply rooted in traditional values and modern excellence.</p>
                <div class="flex justify-center gap-6 mb-8">
                    <!-- Social icons could go here -->
                </div>
                <div class="border-t border-slate-800/50 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-slate-500">&copy; {{ date('Y') }} Gyanoday Vidya Niketan. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bottom Sticky Menu -->
    @include('partials.footer_menu')

</body>
</html>
