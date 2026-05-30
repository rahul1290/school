@extends('layouts.app')

@section('title', 'About Us - Gyanoday Vidya Niketan')

@section('content')
<div class="bg-white min-h-screen">

    {{-- ===== HERO BANNER ===== --}}
    <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-950 py-20 px-4 md:px-8 text-center relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-[0.06] pointer-events-none"
             style="background-image: url('{{ asset("images/logo.png") }}'); background-repeat: repeat; background-size: 70px 70px;"></div>
        <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-white opacity-5 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 rounded-full bg-white opacity-5 blur-2xl"></div>
        <div class="relative z-10">
            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-orange-300 text-sm font-semibold px-5 py-2 rounded-full mb-6 tracking-widest uppercase">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                Know Us Better
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white font-['Outfit'] leading-tight">About Gyanoday<br class="hidden md:block"> Vidya Niketan</h1>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6 rounded-full"></div>
            <p class="mt-6 text-lg md:text-xl text-slate-300 max-w-2xl mx-auto font-light">
                The divine destination for learners — where knowledge meets character, and tradition meets excellence.
            </p>
        </div>
    </div>

    {{-- ===== INTRO / WELCOME ===== --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-600 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">
                        Our Story
                    </div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit'] mb-6 leading-tight">
                        A Legacy of Learning &amp; Values
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-4">
                        Gyanoday Vidya Niketan was founded with a singular vision — to create an institution where young minds are nurtured not just academically, but holistically. Rooted in the timeless wisdom of Indian culture and philosophy, we believe education is the path to <em>Moksh</em> — liberation through knowledge, discipline, and virtue.
                    </p>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        Over the years, we have grown into a vibrant community of learners, educators, and families united by a shared commitment to excellence, integrity, and service.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-2 text-indigo-700 font-semibold">
                            <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            CBSE Affiliated
                        </div>
                        <div class="flex items-center gap-2 text-indigo-700 font-semibold">
                            <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            Co-Education
                        </div>
                        <div class="flex items-center gap-2 text-indigo-700 font-semibold">
                            <svg class="w-5 h-5 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            Classes I – XII
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-indigo-100 to-blue-50 rounded-3xl p-8 shadow-xl border border-indigo-100">
                        <div class="flex justify-center mb-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Gyanoday Vidya Niketan Logo" class="h-32 w-auto object-contain drop-shadow-lg">
                        </div>
                        <blockquote class="text-center text-slate-700 text-lg italic font-medium leading-relaxed">
                            "ज्ञानं परमं बलम्"<br>
                            <span class="text-sm text-slate-500 not-italic font-normal mt-2 block">Knowledge is the supreme strength.</span>
                        </blockquote>
                    </div>
                    {{-- Decorative dots --}}
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-amber-400 rounded-full opacity-20 blur-2xl"></div>
                    <div class="absolute -top-4 -left-4 w-16 h-16 bg-indigo-400 rounded-full opacity-20 blur-xl"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== STATS ===== --}}
    <section class="py-12 bg-gradient-to-r from-orange-500 to-red-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-extrabold font-['Outfit']">15+</div>
                    <div class="text-orange-100 mt-2 text-sm md:text-base font-medium uppercase tracking-wide">Years of Excellence</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-extrabold font-['Outfit']">1200+</div>
                    <div class="text-orange-100 mt-2 text-sm md:text-base font-medium uppercase tracking-wide">Students Enrolled</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-extrabold font-['Outfit']">80+</div>
                    <div class="text-orange-100 mt-2 text-sm md:text-base font-medium uppercase tracking-wide">Qualified Teachers</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-extrabold font-['Outfit']">98%</div>
                    <div class="text-orange-100 mt-2 text-sm md:text-base font-medium uppercase tracking-wide">Board Pass Rate</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== MISSION & VISION ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-600 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">
                    Our Purpose
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">Mission, Vision &amp; Values</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Mission --}}
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 border border-indigo-100 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-['Outfit'] mb-3">Our Mission</h3>
                    <p class="text-slate-600 leading-relaxed">
                        To provide quality education that blends modern academics with Indian cultural values, fostering intellectual curiosity, moral integrity, and a spirit of service in every student.
                    </p>
                </div>
                {{-- Vision --}}
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-3xl p-8 border border-amber-100 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-amber-500 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-['Outfit'] mb-3">Our Vision</h3>
                    <p class="text-slate-600 leading-relaxed">
                        To be a beacon of holistic education — nurturing future leaders who are academically brilliant, spiritually grounded, and socially responsible citizens of India and the world.
                    </p>
                </div>
                {{-- Values --}}
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 border border-green-100 shadow-sm hover:shadow-lg transition-shadow">
                    <div class="w-14 h-14 bg-emerald-600 rounded-2xl flex items-center justify-center mb-6 shadow-md">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 font-['Outfit'] mb-3">Our Values</h3>
                    <ul class="text-slate-600 space-y-2">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-emerald-500 rounded-full flex-shrink-0"></span> Integrity &amp; Honesty</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-emerald-500 rounded-full flex-shrink-0"></span> Respect for All</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-emerald-500 rounded-full flex-shrink-0"></span> Pursuit of Excellence</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-emerald-500 rounded-full flex-shrink-0"></span> Compassion &amp; Service</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-emerald-500 rounded-full flex-shrink-0"></span> Cultural Pride</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== WHAT WE OFFER ===== --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-600 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">
                    Academics &amp; Beyond
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">What We Offer</h2>
                <p class="text-slate-500 mt-3 max-w-xl mx-auto">A complete educational experience designed to develop every dimension of a child's potential.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $offerings = [
                    ['icon' => '📚', 'title' => 'Strong Academics', 'desc' => 'CBSE curriculum from Class I to XII with experienced faculty, smart classrooms, and a focus on conceptual clarity.', 'color' => 'blue'],
                    ['icon' => '🏏', 'title' => 'Sports & Fitness', 'desc' => 'Cricket, football, kabaddi, athletics and more — we believe a healthy body is the foundation of a sharp mind.', 'color' => 'green'],
                    ['icon' => '🎨', 'title' => 'Arts & Culture', 'desc' => 'Music, dance, painting, and drama programs that celebrate creativity and our rich cultural heritage.', 'color' => 'amber'],
                    ['icon' => '🔬', 'title' => 'Science Labs', 'desc' => 'Fully equipped Physics, Chemistry, and Biology labs that bring textbook concepts to life through hands-on experiments.', 'color' => 'purple'],
                    ['icon' => '💻', 'title' => 'Computer Education', 'desc' => 'Modern computer labs with internet access, coding classes, and digital literacy programs for the 21st century.', 'color' => 'indigo'],
                    ['icon' => '🧘', 'title' => 'Yoga & Meditation', 'desc' => 'Daily yoga and meditation sessions to build focus, discipline, and inner peace — rooted in our spiritual philosophy.', 'color' => 'rose'],
                ];
                $colorMap = [
                    'blue'   => 'bg-blue-50 border-blue-100',
                    'green'  => 'bg-green-50 border-green-100',
                    'amber'  => 'bg-amber-50 border-amber-100',
                    'purple' => 'bg-purple-50 border-purple-100',
                    'indigo' => 'bg-indigo-50 border-indigo-100',
                    'rose'   => 'bg-rose-50 border-rose-100',
                ];
                @endphp
                @foreach($offerings as $item)
                <div class="rounded-2xl p-6 border shadow-sm hover:shadow-md transition-shadow {{ $colorMap[$item['color']] }}">
                    <div class="text-4xl mb-4">{{ $item['icon'] }}</div>
                    <h3 class="text-lg font-bold text-slate-900 font-['Outfit'] mb-2">{{ $item['title'] }}</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== PRINCIPAL'S MESSAGE ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-600 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">
                    Leadership
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">Principal's Message</h2>
            </div>
            <div class="bg-gradient-to-br from-indigo-900 to-slate-900 rounded-3xl p-8 md:p-12 text-white relative overflow-hidden shadow-2xl">
                <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
                     style="background-image: url('{{ asset("images/logo.png") }}'); background-repeat: repeat; background-size: 60px 60px;"></div>
                <div class="relative z-10 flex flex-col md:flex-row gap-8 items-start">
                    <div class="flex-shrink-0 flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full bg-white/10 border-2 border-white/30 flex items-center justify-center text-5xl shadow-xl">
                            🎓
                        </div>
                        <div class="mt-4 text-center">
                            <div class="font-bold text-white text-lg font-['Outfit']">Principal</div>
                            <div class="text-indigo-300 text-sm">Gyanoday Vidya Niketan</div>
                        </div>
                    </div>
                    <div>
                        <svg class="w-10 h-10 text-amber-400 mb-4 opacity-60" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <p class="text-slate-200 text-lg leading-relaxed mb-4">
                            Dear Students, Parents, and Well-wishers,
                        </p>
                        <p class="text-slate-300 leading-relaxed mb-4">
                            At Gyanoday Vidya Niketan, we believe that every child is a unique gift to this world. Our role as educators is not merely to fill young minds with information, but to ignite the flame of curiosity, compassion, and courage that will guide them through life.
                        </p>
                        <p class="text-slate-300 leading-relaxed mb-4">
                            We are committed to creating an environment where academic rigor meets spiritual wisdom — where students learn not just to succeed in examinations, but to succeed in life. Our dedicated team of teachers works tirelessly to ensure that every child feels seen, valued, and inspired.
                        </p>
                        <p class="text-slate-300 leading-relaxed">
                            I warmly welcome you to the Gyanoday family and invite you to be a part of this beautiful journey of learning and growth.
                        </p>
                        <div class="mt-6 pt-6 border-t border-white/10">
                            <p class="text-amber-400 font-semibold italic">"Education is not the filling of a pail, but the lighting of a fire."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== INFRASTRUCTURE ===== --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">
                    Our Campus
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">World-Class Infrastructure</h2>
                <p class="text-slate-500 mt-3 max-w-xl mx-auto">A safe, modern, and inspiring campus designed to support every aspect of student life.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                $infra = [
                    ['icon' => '🏫', 'label' => 'Spacious Classrooms'],
                    ['icon' => '📖', 'label' => 'Well-Stocked Library'],
                    ['icon' => '🔬', 'label' => 'Science Laboratories'],
                    ['icon' => '💻', 'label' => 'Computer Lab'],
                    ['icon' => '🏟️', 'label' => 'Sports Ground'],
                    ['icon' => '🎭', 'label' => 'Auditorium'],
                    ['icon' => '🍽️', 'label' => 'Hygienic Canteen'],
                    ['icon' => '🚌', 'label' => 'School Transport'],
                ];
                @endphp
                @foreach($infra as $item)
                <div class="bg-white rounded-2xl p-5 text-center border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                    <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                    <div class="text-sm font-semibold text-slate-700">{{ $item['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== CTA ===== --}}
    <section class="py-16 bg-gradient-to-r from-orange-500 to-red-500">
        <div class="max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-extrabold font-['Outfit'] mb-4">Ready to Join the Gyanoday Family?</h2>
            <p class="text-orange-100 text-lg mb-8 max-w-xl mx-auto">Give your child the gift of holistic education. Admissions are open for the new academic year.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/admission') }}" class="inline-flex items-center justify-center gap-2 bg-white text-orange-600 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Apply for Admission
                </a>
                <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center gap-2 bg-white/10 border border-white/30 text-white font-bold px-8 py-4 rounded-full hover:bg-white/20 transition-all text-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Contact Us
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
