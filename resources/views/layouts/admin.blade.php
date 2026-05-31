<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'GVN Admin Panel')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- CKEditor 4 Standard CDN (includes Source button) -->
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
        
        /* CKEditor Custom Styling to blend with Tailwind forms */
        .ck-editor__editable_inline {
            min-height: 380px !important;
            border-bottom-left-radius: 0.75rem !important;
            border-bottom-right-radius: 0.75rem !important;
            border-color: #cbd5e1 !important;
            padding: 1rem 1.5rem !important;
        }
        .ck-editor__editable_inline:focus {
            border-color: #6366f1 !important;
            outline: none !important;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2) !important;
        }
        .ck-toolbar {
            border-top-left-radius: 0.75rem !important;
            border-top-right-radius: 0.75rem !important;
            border-color: #cbd5e1 !important;
            background-color: #f8fafc !important;
        }
    </style>
</head>
<body class="h-full bg-slate-50 text-slate-800 antialiased" x-data="{ sidebarOpen: false }">

    <!-- Mobile Sidebar Backdrop -->
    <div x-show="sidebarOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false" 
         class="fixed inset-0 z-40 bg-slate-900/40 backdrop-blur-sm lg:hidden" 
         style="display: none;"></div>

    <!-- Mobile Sidebar Drawer -->
    <div x-show="sidebarOpen" 
         x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="fixed inset-y-0 left-0 z-50 flex w-72 flex-col bg-slate-900 text-white shadow-2xl lg:hidden"
         style="display: none;">
        
        <!-- Sidebar Header -->
        <div class="flex h-16 shrink-0 items-center justify-between px-6 border-b border-slate-800">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-9 w-auto bg-white rounded-full p-0.5">
                <div>
                    <h2 class="text-base font-bold tracking-tight">Gyanoday Admin</h2>
                    <p class="text-[10px] text-orange-400 font-semibold uppercase tracking-wider">A Way of Salvation</p>
                </div>
            </div>
            <button @click="sidebarOpen = false" class="rounded-lg p-1 text-slate-400 hover:bg-slate-800 hover:text-white transition">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Sidebar Navigation -->
        <div class="flex flex-1 flex-col overflow-y-auto px-4 py-6">
            @include('partials.admin_sidebar_menu')
        </div>
    </div>

    <!-- Desktop Sticky Sidebar -->
    <aside class="hidden lg:fixed lg:inset-y-0 lg:left-0 lg:z-30 lg:flex lg:w-72 lg:flex-col lg:bg-slate-900 lg:text-white lg:border-r lg:border-slate-800">
        <!-- Sidebar Header -->
        <div class="flex h-20 shrink-0 items-center px-8 border-b border-slate-800 bg-slate-950/40">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto bg-white rounded-full p-0.5 shadow-sm">
                <div>
                    <h2 class="text-lg font-bold tracking-tight text-white leading-tight">Gyanoday Admin</h2>
                    <p class="text-[10px] text-orange-400 font-bold uppercase tracking-widest text-left">A Way of Salvation</p>
                </div>
            </div>
        </div>

        <!-- Sidebar Navigation -->
        <div class="flex flex-1 flex-col overflow-y-auto px-6 py-8">
            @include('partials.admin_sidebar_menu')
        </div>
    </aside>

    <!-- Main Workspace Area -->
    <div class="lg:pl-72 flex flex-col min-h-screen">
        
        <!-- Mobile Top Navbar -->
        <header class="flex h-16 shrink-0 items-center justify-between border-b border-slate-200 bg-white px-6 shadow-sm lg:hidden">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto bg-white rounded-full p-0.5 shadow-sm">
                <span class="font-bold text-slate-800 tracking-tight">GVN Admin</span>
            </div>
            <button @click="sidebarOpen = true" class="rounded-lg p-1.5 text-slate-600 hover:bg-slate-100 transition">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </header>

        <!-- Main Content Wrapper -->
        <main class="flex-1 py-10 px-6 sm:px-8 lg:px-12 max-w-full">
            @yield('content')
        </main>
    </div>

    <!-- CKEditor Auto-Binding Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ckFields = document.querySelectorAll('textarea.ckeditor-enabled');
            ckFields.forEach(field => {
                CKEDITOR.replace(field, {
                    height: 400,
                    removeButtons: 'PasteFromWord',
                    versionCheck: false,
                    allowedContent: true
                });
            });
        });
    </script>
</body>
</html>
