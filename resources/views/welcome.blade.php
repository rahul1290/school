@extends('layouts.app')

@section('title', 'Welcome to Gyanoday Vidya Niketan')

@section('content')

<!-- Hero Static Image Section -->
<!-- <div class="relative w-full aspect-square sm:aspect-video md:aspect-[2/1] lg:aspect-[5/2] overflow-hidden bg-white">
    <img src="{{ asset('images/slider1.png') }}" alt="Welcome to Gyanoday Vidya Niketan" class="w-full h-full object-cover object-top">
</div> -->

<!-- Hero Static Image Section -->
<section class="relative w-full overflow-hidden bg-white">
    
    <!-- Hero Image -->
    <!-- <div class="relative h-[220px] sm:h-[350px] md:h-[500px] lg:h-[650px] xl:h-[750px]"> -->
        @if(isset($sections['hero']) && $sections['hero']->images->count() > 0)
        <img 
            src="{{ asset($sections['hero']->images->first()->image_path) }}" 
            alt="Welcome to Gyanoday Vidya Niketan"
            class="w-full h-full object-cover object-center"
        >
        @else
        <img 
            src="{{ asset('images/slider1.png') }}" 
            alt="Welcome to Gyanoday Vidya Niketan"
            class="w-full h-full object-cover object-center"
        >
        @endif
    <!-- </div> -->

</section>


<!-- Academics Section -->
<section id="academics" class="pt-16 pb-12 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto space-y-6">
            <div class="inline-flex items-center justify-center gap-3 bg-white px-6 py-2 rounded-full shadow-sm mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto object-contain">
                <span class="text-indigo-600 font-semibold tracking-wider text-sm uppercase">{{ $sections['academics']->subtitle_top ?? 'Academics' }}</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['academics']->title ?? 'Welcome to the Gyanoday Family' }}</h2>
            <p class="text-xl text-slate-600 font-light">{{ $sections['academics']->subtitle_bottom ?? 'The divine destination for learners, where attaining Moksh is the ultimate goal of life.' }}</p>
        </div>
    </div>
</section>

<!-- Our Campus Slider Section -->
<section id="campus" class="pt-12 pb-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div x-data="campusCarousel()" class="relative w-full max-w-6xl mx-auto overflow-hidden pb-12">
            <h3 class="text-3xl font-bold text-center text-slate-800 mb-10 font-['Outfit']">{{ $sections['campus']->title ?? 'Our Campus' }}</h3>
            <div class="relative flex items-center justify-center h-[28rem] md:h-[36rem]">
                <template x-for="(img, index) in images" :key="index">
                    <div class="absolute h-full transition-all duration-700 ease-out rounded-3xl shadow-2xl overflow-hidden cursor-pointer"
                         style="width: 60%; max-width: 600px;"
                         @click="active = index"
                         :style="
                            active === index ? 'z-index: 30; opacity: 1; transform: translateX(0) scale(1);' :
                            index === getLeftIndex() ? 'z-index: 20; opacity: 0.5; transform: translateX(-60%) scale(0.8) rotateY(10deg); filter: blur(2px);' :
                            index === getRightIndex() ? 'z-index: 20; opacity: 0.5; transform: translateX(60%) scale(0.8) rotateY(-10deg); filter: blur(2px);' :
                            'z-index: 10; opacity: 0; transform: translateX(0) scale(0.6);'
                         ">
                        <img :src="img" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="Campus">
                    </div>
                </template>
                
                <button @click="prev()" class="absolute left-4 md:left-12 z-40 w-14 h-14 bg-white/80 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button @click="next()" class="absolute right-4 md:right-12 z-40 w-14 h-14 bg-white/80 backdrop-blur-sm rounded-full shadow-lg flex items-center justify-center hover:bg-white text-slate-800 transition-all hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="bg-slate-50 relative overflow-hidden py-16">
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-50 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/3 opacity-80"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-50 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/3 opacity-80"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="inline-block px-4 py-2 rounded-full bg-orange-100 text-orange-600 font-semibold tracking-wider text-sm uppercase">Celebrating Academic Excellence</div>
                <p class="text-xl text-slate-600 leading-relaxed font-light mb-2">
                    One of Our Bright Students is Pursuing MBBS.
                </p>
                <p class="text-base text-slate-600 leading-relaxed font-light">
                    We are incredibly proud of our students whose dedication continues to set new benchmarks for academic success. Pursuing an MBBS is no small feat; it requires relentless perseverance and an unwavering commitment to serving humanity. At Gyanoday Vidya Niketan, we foster an enriching environment that combines rigorous textbook learning with critical thinking and personalized mentorship. Our holistic approach ensures every student is equipped to chase their most ambitious dreams. Seeing our alumni excel in highly competitive national examinations and secure placements in top medical institutions fills us with immense pride. They prove that with true determination, the sky is the limit.
                </p>
            </div>
            <div class="relative group max-w-md mx-auto w-full lg:ml-auto">
                <div class="rounded-3xl overflow-hidden shadow-2xl relative z-10 transform transition-transform duration-700 group-hover:scale-[1.02] bg-slate-100 flex items-center justify-center">
                    <img src="{{ asset('images/achivers/ach1.jpeg') }}" alt="Students learning" class="w-full h-auto object-contain rounded-3xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                </div>
                <p class="text-xl text-center text-slate-800 leading-relaxed font-light mb-2">
                    Anurag Tandon
                </p>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-orange-100 rounded-full z-0 animate-pulse"></div>
                <div class="absolute -top-8 -right-8 w-24 h-24 bg-indigo-100 rounded-full z-0 delay-150 animate-pulse"></div>
            </div>
        </div>
    </div>
</section>

<!-- Navoday Achievers Section -->
<section id="achievers" class="py-24 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h3 class="text-orange-500 font-semibold tracking-wider uppercase">{{ $sections['achievers']->subtitle_top ?? 'Celebrating Excellence' }}</h3>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['achievers']->title ?? 'Navoday Achievers' }}</h2>
            <h6 class="text-sm md:text-base font-semibold text-gray-600">{{ $sections['achievers']->subtitle_bottom ?? '55 students selected in Navodaya vidyalaya' }}</h6>
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
                        <img :src="img" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" alt="Navoday Achievers">
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

<!-- Sport Activity Section -->
<section id="sports" class="py-24 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h3 class="text-indigo-500 font-semibold tracking-wider uppercase">{{ $sections['sports']->subtitle_top ?? 'Active Lifestyle' }}</h3>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 font-['Outfit']">{{ $sections['sports']->title ?? 'Sport Activity' }}</h2>
            <h6 class="text-sm md:text-base font-semibold text-gray-600">{{ $sections['sports']->subtitle_bottom ?? 'Beyond the Classroom' }}</h6>
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
                        <img :src="img" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" alt="Sport Activity">
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

<!-- Call to Action -->
<section id="contact" class="py-8 relative overflow-hidden">
    <!-- <div class="absolute inset-0 bg-slate-900 z-0"></div> -->
    <!-- <div class="absolute inset-0 z-0 bg-[url('{{ asset("images/campus3.png") }}')] bg-cover bg-center opacity-20 mix-blend-overlay"></div> -->
    <!-- <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent z-0"></div> -->
    
    <!-- <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-10">
        <h2 class="text-5xl md:text-6xl font-extrabold text-white font-['Outfit'] drop-shadow-xl">Begin Your Journey With Us</h2>
        <p class="text-xl md:text-2xl text-slate-300 font-light max-w-2xl mx-auto drop-shadow-md">Admissions are now open for the upcoming academic year. Give your child the gift of holistic education.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-6 pt-8">
            <a href="{{ url('/admission') }}" class="inline-block px-10 py-5 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold rounded-xl shadow-[0_0_30px_rgba(249,115,22,0.3)] hover:shadow-[0_0_40px_rgba(249,115,22,0.5)] transition-all text-lg transform hover:-translate-y-1">
                Apply for Admission
            </a>
            <button class="px-10 py-5 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl backdrop-blur-md transition-all text-lg border border-white/20 hover:border-white/40 transform hover:-translate-y-1 shadow-xl">
                Contact Admissions
            </button>
        </div>
    </div> -->
</section>

<script>
    function campusCarousel() {
        return {
            active: 0,
            images: {!! isset($sections['campus']) ? json_encode($sections['campus']->images->map(fn($img) => asset($img->image_path))->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); }
        }
    }

    function achieversCarousel() {
        return {
            active: 0,
            interval: null,
            images: {!! isset($sections['achievers']) ? json_encode($sections['achievers']->images->map(fn($img) => asset($img->image_path))->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); },
            startAutoPlay() {
                this.interval = setInterval(() => { this.next(); }, 4000);
            }
        }
    }

    function sportsCarousel() {
        return {
            active: 0,
            interval: null,
            images: {!! isset($sections['sports']) ? json_encode($sections['sports']->images->map(fn($img) => asset($img->image_path))->toArray()) : '[]' !!},
            getLeftIndex() { return this.active === 0 ? this.images.length - 1 : this.active - 1; },
            getRightIndex() { return this.active === this.images.length - 1 ? 0 : this.active + 1; },
            next() { this.active = this.getRightIndex(); },
            prev() { this.active = this.getLeftIndex(); },
            startAutoPlay() {
                this.interval = setInterval(() => { this.next(); }, 3000);
            }
        }
    }


</script>

<style>
    @keyframes fade-in-up {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>

@endsection
