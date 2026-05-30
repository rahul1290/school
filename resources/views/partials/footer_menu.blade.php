<div class="fixed bottom-0 left-0 w-full bg-gradient-to-r from-orange-500 to-red-500 border-t border-orange-600 shadow-xl z-50 md:hidden pb-safe">
    <div class="flex justify-around items-center h-16">
        <!-- Home -->
        <a href="{{ url('/') }}" class="flex flex-col items-center justify-center w-full h-full transition-colors group {{ request()->is('/') ? 'text-white font-bold' : 'text-orange-100 hover:text-white' }}">
            <svg class="w-6 h-6 mb-1 group-hover:-translate-y-1 transition-transform {{ request()->is('/') ? 'scale-110' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="text-[10px] tracking-wide uppercase">Home</span>
        </a>

        <!-- About -->
        <a href="{{ url('/about-us') }}" class="flex flex-col items-center justify-center w-full h-full transition-colors group {{ request()->is('about-us') ? 'text-white font-bold' : 'text-orange-100 hover:text-white' }}">
            <svg class="w-6 h-6 mb-1 group-hover:-translate-y-1 transition-transform {{ request()->is('about-us') ? 'scale-110' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="text-[10px] tracking-wide uppercase">About</span>
        </a>

        <!-- Menu/Slider trigger (Optional center prominent button) -->
        <div class="flex flex-col items-center justify-center w-full h-full relative -top-5">
            <button class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-orange-600 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <span class="text-[10px] font-medium tracking-wide uppercase text-orange-100 mt-1">Menu</span>
        </div>

        <!-- Academics -->
        <a href="{{ url('/#academics') }}" class="flex flex-col items-center justify-center w-full h-full transition-colors group {{ request()->is('#academics') ? 'text-white font-bold' : 'text-orange-100 hover:text-white' }}">
            <svg class="w-6 h-6 mb-1 group-hover:-translate-y-1 transition-transform {{ request()->is('#academics') ? 'scale-110' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <span class="text-[10px] tracking-wide uppercase">Academics</span>
        </a>

        <!-- Contact -->
        <a href="{{ url('/contact') }}" class="flex flex-col items-center justify-center w-full h-full transition-colors group {{ request()->is('contact') ? 'text-white font-bold' : 'text-orange-100 hover:text-white' }}">
            <svg class="w-6 h-6 mb-1 group-hover:-translate-y-1 transition-transform {{ request()->is('contact') ? 'scale-110' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span class="text-[10px] tracking-wide uppercase">Contact</span>
        </a>
    </div>
</div>
