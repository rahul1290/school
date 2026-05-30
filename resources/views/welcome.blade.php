@extends('layouts.app')

@section('title', 'Welcome to Gyanoday Vidya Niketan')

@section('content')

{{-- ===== HERO SLIDER ===== --}}
<section class="relative w-full overflow-hidden bg-slate-900"
         x-data="heroSlider()"
         x-init="startAutoPlay()">

    {{-- Slides --}}
    <div class="relative h-[260px] sm:h-[380px] md:h-[520px] lg:h-[640px]">
        <template x-for="(slide, i) in slides" :key="i">
            <div class="absolute inset-0 transition-opacity duration-1000"
                 :class="active === i ? 'opacity-100 z-10' : 'opacity-0 z-0'">
                <img :src="slide.img" :alt="slide.title"
                     class="w-full h-full object-cover object-center">
                {{-- Gradient overlay --}}
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-slate-900/40 to-transparent"></div>
                {{-- Text overlay --}}
                <div class="absolute inset-0 flex flex-col justify-center px-6 sm:px-12 lg:px-24"
                     x-show="active === i"
                     x-transition:enter="transition ease-out duration-700 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-6"
                     x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="inline-flex items-center gap-2 bg-orange-500/90 text-white text-xs font-bold px-4 py-1.5 rounded-full mb-4 w-fit uppercase tracking-widest"
                         x-show="slide.badge" x-text="slide.badge"></div>
                    <h2 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-white font-['Outfit'] leading-tight max-w-2xl drop-shadow-xl"
                        x-text="slide.title"></h2>
                    <p class="mt-3 text-sm sm:text-base md:text-lg text-slate-200 max-w-xl font-light drop-shadow"
                       x-show="slide.sub" x-text="slide.sub"></p>
                    <div class="mt-6 flex gap-3 flex-wrap">
                        <a href="/admission"
                           class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold px-6 py-3 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-sm">
                            Apply for Admission
                        </a>
                        <a href="/about-us"
                           class="inline-flex items-center gap-2 bg-white/15 border border-white/30 text-white font-semibold px-6 py-3 rounded-full hover:bg-white/25 transition-all text-sm backdrop-blur-sm">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </template>

        {{-- Prev / Next --}}
        <button @click="prev()"
                class="absolute left-3 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-all hover:scale-110 shadow-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button @click="next()"
                class="absolute right-3 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 bg-white/20 hover:bg-white/40 backdrop-blur-sm rounded-full flex items-center justify-center text-white transition-all hover:scale-110 shadow-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        </button>

        {{-- Dots --}}
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-2">
            <template x-for="(s, i) in slides" :key="i">
                <button @click="active = i; resetTimer()"
                        class="rounded-full transition-all duration-300"
                        :class="active === i ? 'w-6 h-2.5 bg-orange-400' : 'w-2.5 h-2.5 bg-white/50 hover:bg-white/80'">
                </button>
            </template>
        </div>
    </div>
</section>

{{-- ===== NOTICE / TICKER BAR ===== --}}
<div class="bg-gradient-to-r from-orange-500 to-red-500 text-white py-2.5 overflow-hidden">
    <div class="flex items-center gap-0">
        <div class="flex-shrink-0 bg-white/20 text-white font-bold text-xs uppercase tracking-widest px-5 py-1 mr-4 flex items-center gap-2">
            <svg class="w-4 h-4 animate-pulse" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"/></svg>
            Notice
        </div>
        <div class="overflow-hidden flex-1">
            <div class="whitespace-nowrap animate-marquee text-sm font-medium">
                🎓 Admissions Open for Academic Year 2026–27 &nbsp;|&nbsp; 🏆 55 Students Selected in Navodaya Vidyalaya &nbsp;|&nbsp; 📅 Annual Sports Day – June 15, 2026 &nbsp;|&nbsp; 🎨 Art & Culture Fest – July 5, 2026 &nbsp;|&nbsp; 📚 Result Declaration – Class X & XII on June 20, 2026 &nbsp;|&nbsp; 🌟 Congratulations to all Board Exam Toppers!
            </div>
        </div>
    </div>
</div>


{{-- ===== ACADEMICS / WELCOME ===== --}}
<section id="academics" class="py-16 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-80 h-80 bg-indigo-100 rounded-full blur-[80px] opacity-50 -translate-y-1/2 translate-x-1/3"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            {{-- Text --}}
            <div class="space-y-5">
                <div class="inline-flex items-center gap-3 bg-white px-5 py-2 rounded-full shadow-sm border border-slate-100">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-7 w-auto object-contain">
                    <span class="text-indigo-600 font-semibold tracking-wider text-xs uppercase">{{ $sections['academics']->subtitle_top ?? 'Academics' }}</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 font-['Outfit'] leading-tight">
                    {{ $sections['academics']->title ?? 'Welcome to the Gyanoday Family' }}
                </h2>
                <p class="text-lg text-slate-600 font-light leading-relaxed">
                    {{ $sections['academics']->subtitle_bottom ?? 'The divine destination for learners, where attaining Moksh is the ultimate goal of life.' }}
                </p>
                <p class="text-slate-500 leading-relaxed">
                    We nurture young minds with a perfect blend of modern academics and timeless Indian values. Our CBSE-affiliated school offers a holistic environment where every child is encouraged to discover their unique potential.
                </p>
                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="{{ url('/about-us') }}" class="inline-flex items-center gap-2 bg-indigo-600 text-white font-semibold px-6 py-3 rounded-full hover:bg-indigo-700 transition-all shadow-md hover:shadow-lg text-sm">
                        Know More About Us
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ url('/admission') }}" class="inline-flex items-center gap-2 border border-orange-400 text-orange-600 font-semibold px-6 py-3 rounded-full hover:bg-orange-50 transition-all text-sm">
                        Apply Now
                    </a>
                </div>
            </div>
            {{-- Stats grid --}}
            <div class="grid grid-cols-2 gap-4">
                @php
                $stats = [
                    ['val' => '15+', 'label' => 'Years of Excellence', 'icon' => '🏫', 'bg' => 'bg-indigo-50 border-indigo-100'],
                    ['val' => '1200+', 'label' => 'Students Enrolled', 'icon' => '🎓', 'bg' => 'bg-orange-50 border-orange-100'],
                    ['val' => '80+', 'label' => 'Qualified Teachers', 'icon' => '👩‍🏫', 'bg' => 'bg-green-50 border-green-100'],
                    ['val' => '98%', 'label' => 'Board Pass Rate', 'icon' => '🏆', 'bg' => 'bg-amber-50 border-amber-100'],
                ];
                @endphp
                @foreach($stats as $s)
                <div class="rounded-2xl p-5 border {{ $s['bg'] }} text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-3xl mb-2">{{ $s['icon'] }}</div>
                    <div class="text-3xl font-extrabold text-slate-900 font-['Outfit']">{{ $s['val'] }}</div>
                    <div class="text-xs text-slate-500 mt-1 font-medium uppercase tracking-wide">{{ $s['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===== CAMPUS SLIDER ===== --}}
<section id="campus" class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 text-xs font-bold px-4 py-2 rounded-full mb-3 uppercase tracking-widest">Our Campus</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['campus']->title ?? 'Our Campus' }}</h2>
            <p class="text-slate-500 mt-2 max-w-lg mx-auto">A safe, modern, and inspiring environment designed for learning and growth.</p>
        </div>
        <div x-data="campusCarousel()" x-init="startAutoPlay()" class="relative w-full max-w-5xl mx-auto overflow-hidden pb-10">
            <div class="relative flex items-center justify-center h-64 md:h-96">
                <template x-for="(img, index) in images" :key="index">
                    <div class="absolute h-full transition-all duration-700 ease-out rounded-2xl shadow-xl overflow-hidden cursor-pointer bg-slate-100"
                         style="width: 50%; max-width: 500px;"
                         @click="active = index"
                         :style="
                            active === index ? 'z-index: 30; opacity: 1; transform: translateX(0) scale(1);' :
                            index === getLeftIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(-55%) scale(0.85);' :
                            index === getRightIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(55%) scale(0.85);' :
                            'z-index: 10; opacity: 0; transform: translateX(0) scale(0.7);'
                         ">
                        <img :src="img" class="w-full h-full object-contain sm:object-cover hover:scale-105 transition-transform duration-700" alt="Campus">
                    </div>
                </template>
                <button @click="prev()" class="absolute left-2 md:left-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="next()" class="absolute right-2 md:right-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ===== WHY CHOOSE US ===== --}}
<section class="py-16 bg-gradient-to-br from-indigo-900 to-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
         style="background-image: url('{{ asset("images/logo.png") }}'); background-repeat: repeat; background-size: 80px 80px;"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-orange-300 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">Why Gyanoday</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-white font-['Outfit']">Why Choose Us?</h2>
            <p class="text-slate-400 mt-3 max-w-xl mx-auto">Everything a child needs to thrive — under one roof.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $features = [
                ['icon' => '📚', 'title' => 'CBSE Curriculum', 'desc' => 'Structured, nationally recognized curriculum from Class I to XII with experienced faculty.'],
                ['icon' => '🧘', 'title' => 'Yoga & Meditation', 'desc' => 'Daily sessions to build focus, discipline, and inner peace rooted in our spiritual philosophy.'],
                ['icon' => '🔬', 'title' => 'Modern Labs', 'desc' => 'Fully equipped Physics, Chemistry, Biology, and Computer labs for hands-on learning.'],
                ['icon' => '🏏', 'title' => 'Sports & Fitness', 'desc' => 'Cricket, football, kabaddi, athletics and more — a healthy body builds a sharp mind.'],
                ['icon' => '🎨', 'title' => 'Arts & Culture', 'desc' => 'Music, dance, painting, and drama programs celebrating creativity and cultural heritage.'],
                ['icon' => '🚌', 'title' => 'Safe Transport', 'desc' => 'Reliable school bus service covering major routes with trained staff for student safety.'],
            ];
            @endphp
            @foreach($features as $f)
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all hover:-translate-y-1 group">
                <div class="text-3xl mb-4">{{ $f['icon'] }}</div>
                <h3 class="text-white font-bold text-lg font-['Outfit'] mb-2 group-hover:text-orange-300 transition-colors">{{ $f['title'] }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $f['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== ACHIEVER SPOTLIGHT ===== --}}
<section id="about" class="py-16 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-50 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 opacity-80"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-50 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/3 opacity-80"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-600 text-xs font-bold px-4 py-2 rounded-full mb-3 uppercase tracking-widest">Student Achievement</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">Celebrating Academic Excellence</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-5">
                <p class="text-xl text-slate-700 font-semibold leading-relaxed">
                    One of Our Bright Students is Pursuing MBBS.
                </p>
                <p class="text-base text-slate-600 leading-relaxed">
                    We are incredibly proud of our students whose dedication continues to set new benchmarks for academic success. Pursuing an MBBS is no small feat — it requires relentless perseverance and an unwavering commitment to serving humanity.
                </p>
                <p class="text-base text-slate-600 leading-relaxed">
                    At Gyanoday Vidya Niketan, we foster an enriching environment that combines rigorous academics with critical thinking and personalized mentorship. Seeing our alumni excel in highly competitive national examinations fills us with immense pride.
                </p>
                <div class="flex flex-wrap gap-3 pt-2">
                    <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-full px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        <span class="text-green-500">✓</span> NEET Qualified
                    </div>
                    <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-full px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        <span class="text-green-500">✓</span> MBBS Admission
                    </div>
                    <div class="flex items-center gap-2 bg-white border border-slate-200 rounded-full px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm">
                        <span class="text-green-500">✓</span> Gyanoday Alumni
                    </div>
                </div>
            </div>
            <div class="relative group max-w-sm mx-auto w-full lg:ml-auto">
                <div class="rounded-3xl overflow-hidden shadow-2xl relative z-10 transform transition-transform duration-700 group-hover:scale-[1.02] bg-slate-100">
                    <img src="{{ asset('images/achivers/ach1.jpeg') }}" alt="Anurag Tandon - Achiever" class="w-full h-auto object-contain rounded-3xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent rounded-3xl"></div>
                    <div class="absolute bottom-4 left-0 right-0 text-center">
                        <span class="bg-white/90 text-slate-800 font-bold text-sm px-4 py-1.5 rounded-full shadow">Anurag Tandon</span>
                    </div>
                </div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-orange-100 rounded-full z-0 animate-pulse"></div>
                <div class="absolute -top-6 -right-6 w-20 h-20 bg-indigo-100 rounded-full z-0 animate-pulse delay-150"></div>
            </div>
        </div>
    </div>
</section>

{{-- ===== NAVODAY ACHIEVERS ===== --}}
<section id="achievers" class="py-16 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-600 text-xs font-bold px-4 py-2 rounded-full uppercase tracking-widest">{{ $sections['achievers']->subtitle_top ?? 'Celebrating Excellence' }}</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['achievers']->title ?? 'Navoday Achievers' }}</h2>
            <p class="text-base font-semibold text-orange-500">{{ $sections['achievers']->subtitle_bottom ?? '55 students selected in Navodaya Vidyalaya' }}</p>
        </div>
        <div x-data="achieversCarousel()" x-init="startAutoPlay()" class="relative w-full max-w-5xl mx-auto overflow-hidden pb-10">
            <div class="relative flex items-center justify-center h-64 md:h-96">
                <template x-for="(img, index) in images" :key="index">
                    <div class="absolute h-full transition-all duration-700 ease-out rounded-2xl shadow-xl overflow-hidden cursor-pointer bg-slate-200"
                         style="width: 50%; max-width: 500px;"
                         @click="active = index"
                         :style="
                            active === index ? 'z-index: 30; opacity: 1; transform: translateX(0) scale(1);' :
                            index === getLeftIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(-55%) scale(0.85);' :
                            index === getRightIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(55%) scale(0.85);' :
                            'z-index: 10; opacity: 0; transform: translateX(0) scale(0.7);'
                         ">
                        <img :src="img" class="w-full h-full object-contain sm:object-cover hover:scale-105 transition-transform duration-500" alt="Navoday Achievers">
                    </div>
                </template>
                <button @click="prev()" class="absolute left-2 md:left-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="next()" class="absolute right-2 md:right-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ===== SPORTS ===== --}}
<section id="sports" class="py-16 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-600 text-xs font-bold px-4 py-2 rounded-full uppercase tracking-widest">{{ $sections['sports']->subtitle_top ?? 'Active Lifestyle' }}</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['sports']->title ?? 'Sport Activity' }}</h2>
            <p class="text-base text-slate-500">{{ $sections['sports']->subtitle_bottom ?? 'Beyond the Classroom' }}</p>
        </div>
        <div x-data="sportsCarousel()" x-init="startAutoPlay()" class="relative w-full max-w-5xl mx-auto overflow-hidden pb-10">
            <div class="relative flex items-center justify-center h-64 md:h-96">
                <template x-for="(img, index) in images" :key="index">
                    <div class="absolute h-full transition-all duration-700 ease-out rounded-2xl shadow-xl overflow-hidden cursor-pointer bg-slate-200"
                         style="width: 50%; max-width: 500px;"
                         @click="active = index"
                         :style="
                            active === index ? 'z-index: 30; opacity: 1; transform: translateX(0) scale(1);' :
                            index === getLeftIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(-55%) scale(0.85);' :
                            index === getRightIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(55%) scale(0.85);' :
                            'z-index: 10; opacity: 0; transform: translateX(0) scale(0.7);'
                         ">
                        <img :src="img" class="w-full h-full object-contain sm:object-cover hover:scale-105 transition-transform duration-500" alt="Sport Activity">
                    </div>
                </template>
                <button @click="prev()" class="absolute left-2 md:left-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="next()" class="absolute right-2 md:right-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ===== ART & CULTURE ===== --}}
<section id="art_culture" class="py-16 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-600 text-xs font-bold px-4 py-2 rounded-full uppercase tracking-widest">{{ $sections['art_culture']->subtitle_top ?? 'Creativity' }}</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['art_culture']->title ?? 'A Celebration of Art & Culture' }}</h2>
            <p class="text-base text-slate-500">{{ $sections['art_culture']->subtitle_bottom ?? 'Expressing our heritage' }}</p>
        </div>
        <div x-data="artCarousel()" x-init="startAutoPlay()" class="relative w-full max-w-5xl mx-auto overflow-hidden pb-10">
            <div class="relative flex items-center justify-center h-64 md:h-96">
                <template x-for="(img, index) in images" :key="index">
                    <div class="absolute h-full transition-all duration-700 ease-out rounded-2xl shadow-xl overflow-hidden cursor-pointer bg-slate-200"
                         style="width: 50%; max-width: 500px;"
                         @click="active = index"
                         :style="
                            active === index ? 'z-index: 30; opacity: 1; transform: translateX(0) scale(1);' :
                            index === getLeftIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(-55%) scale(0.85);' :
                            index === getRightIndex() ? 'z-index: 20; opacity: 0.6; transform: translateX(55%) scale(0.85);' :
                            'z-index: 10; opacity: 0; transform: translateX(0) scale(0.7);'
                         ">
                        <img :src="img" class="w-full h-full object-contain sm:object-cover hover:scale-105 transition-transform duration-500" alt="Art and Culture">
                    </div>
                </template>
                <button @click="prev()" class="absolute left-2 md:left-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="next()" class="absolute right-2 md:right-4 z-40 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ===== TESTIMONIALS ===== --}}
<section class="py-16 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full mb-3 uppercase tracking-widest">Testimonials</div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">What Parents Say</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
            $testimonials = [
                ['name' => 'Ramesh Sharma', 'role' => 'Parent of Class VIII Student', 'text' => 'Gyanoday has transformed my child completely. The teachers are dedicated and the values they instill are priceless. My son has become more disciplined and confident.', 'stars' => 5],
                ['name' => 'Sunita Patel', 'role' => 'Parent of Class X Student', 'text' => 'The school\'s focus on both academics and character building is exceptional. My daughter scored 95% in boards and credits her success to the amazing faculty here.', 'stars' => 5],
                ['name' => 'Mahesh Verma', 'role' => 'Parent of Class V Student', 'text' => 'The campus is safe, the staff is caring, and the education quality is top-notch. We are proud to be part of the Gyanoday family. Highly recommended!', 'stars' => 5],
            ];
            @endphp
            @foreach($testimonials as $t)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < $t['stars']; $i++)
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-slate-600 text-sm leading-relaxed mb-5 italic">"{{ $t['text'] }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div>
                        <div class="font-bold text-slate-800 text-sm">{{ $t['name'] }}</div>
                        <div class="text-slate-400 text-xs">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section class="py-16 bg-gradient-to-r from-orange-500 to-red-500 relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none"
         style="background-image: url('{{ asset("images/logo.png") }}'); background-repeat: repeat; background-size: 80px 80px;"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white font-['Outfit'] mb-4 leading-tight">
            Begin Your Journey With Us
        </h2>
        <p class="text-orange-100 text-lg mb-8 max-w-xl mx-auto font-light">
            Admissions are now open for the upcoming academic year. Give your child the gift of holistic education.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ url('/admission') }}"
               class="inline-flex items-center justify-center gap-2 bg-white text-orange-600 font-bold px-8 py-4 rounded-full shadow-xl hover:shadow-2xl hover:-translate-y-0.5 transition-all text-base">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Apply for Admission
            </a>
            <a href="{{ url('/contact') }}"
               class="inline-flex items-center justify-center gap-2 bg-white/15 border border-white/30 text-white font-bold px-8 py-4 rounded-full hover:bg-white/25 transition-all text-base backdrop-blur-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Contact Admissions
            </a>
        </div>
    </div>
</section>

<script>
    // ===== HERO SLIDER =====
    function heroSlider() {
        const heroImages = {!! isset($sections['hero']) && $sections['hero']->images->count() > 0
            ? json_encode($sections['hero']->images->map(fn($img) => asset($img->image_path))->toArray())
            : json_encode([asset('images/slider1.png')]) !!};

        const defaultSlides = [
            { img: heroImages[0] ?? '{{ asset("images/slider1.png") }}', badge: 'Admissions Open 2026–27', title: 'Welcome to Gyanoday Vidya Niketan', sub: 'The divine destination for learners — where knowledge meets character.' },
            { img: heroImages[1] ?? heroImages[0], badge: 'Excellence in Education', title: 'Nurturing Minds, Building Character', sub: 'CBSE affiliated school offering holistic education from Class I to XII.' },
            { img: heroImages[2] ?? heroImages[0], badge: '55 Navodaya Selections', title: 'Celebrating Our Achievers', sub: 'Our students continue to make us proud with outstanding results.' },
        ];

        return {
            active: 0,
            interval: null,
            slides: defaultSlides,
            next() { this.active = (this.active + 1) % this.slides.length; },
            prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length; },
            resetTimer() { clearInterval(this.interval); this.startAutoPlay(); },
            startAutoPlay() {
                this.interval = setInterval(() => { this.next(); }, 5000);
            }
        }
    }

    // ===== CAMPUS CAROUSEL =====
    function campusCarousel() {
        return {
            active: 0,
            interval: null,
            images: {!! isset($sections['campus']) ? json_encode($sections['campus']->images->map(function($img) { return asset($img->image_path); })->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); },
            startAutoPlay() { this.interval = setInterval(() => { this.next(); }, 4000); }
        }
    }

    // ===== ACHIEVERS CAROUSEL =====
    function achieversCarousel() {
        return {
            active: 0,
            interval: null,
            images: {!! isset($sections['achievers']) ? json_encode($sections['achievers']->images->map(function($img) { return asset($img->image_path); })->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); },
            startAutoPlay() { this.interval = setInterval(() => { this.next(); }, 4000); }
        }
    }

    // ===== SPORTS CAROUSEL =====
    function sportsCarousel() {
        return {
            active: 0,
            interval: null,
            images: {!! isset($sections['sports']) ? json_encode($sections['sports']->images->map(function($img) { return asset($img->image_path); })->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); },
            startAutoPlay() { this.interval = setInterval(() => { this.next(); }, 3000); }
        }
    }

    // ===== ART CAROUSEL =====
    function artCarousel() {
        return {
            active: 0,
            interval: null,
            images: {!! isset($sections['art_culture']) ? json_encode($sections['art_culture']->images->map(function($img) { return asset($img->image_path); })->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); },
            startAutoPlay() { this.interval = setInterval(() => { this.next(); }, 3500); }
        }
    }
</script>

<style>
    @keyframes marquee {
        0%   { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    .animate-marquee {
        display: inline-block;
        animation: marquee 30s linear infinite;
    }
    @keyframes fade-in-up {
        0%   { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>

@endsection
