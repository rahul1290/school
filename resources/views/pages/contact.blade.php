@extends('layouts.app')

@section('title', 'Contact Us - Gyanoday Vidya Niketan')

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
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Get In Touch
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white font-['Outfit'] leading-tight">Contact Us</h1>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6 rounded-full"></div>
            <p class="mt-6 text-lg md:text-xl text-slate-300 max-w-2xl mx-auto font-light">
                We'd love to hear from you. Reach out for admissions, enquiries, or just to say hello.
            </p>
        </div>
    </div>

    {{-- ===== CONTACT CARDS + MAP ===== --}}
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">

                {{-- LEFT: Contact Info Cards --}}
                <div class="lg:col-span-2 space-y-5">

                    {{-- Address --}}
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow flex gap-5 items-start">
                        <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl shadow-sm">
                            📍
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 font-['Outfit'] mb-1">Our Address</h3>
                            <div class="w-10 h-0.5 bg-blue-500 rounded-full mb-3"></div>
                            <p class="text-slate-600 leading-relaxed text-sm">
                                Gyanoday Vidya Niketan<br>
                                School Lane, Education City<br>
                                Bhopal, Madhya Pradesh<br>
                                PIN – 462001
                            </p>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow flex gap-5 items-start">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl shadow-sm">
                            📞
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 font-['Outfit'] mb-1">Phone Numbers</h3>
                            <div class="w-10 h-0.5 bg-green-500 rounded-full mb-3"></div>
                            <a href="tel:+919876543210" class="block text-slate-600 hover:text-blue-700 transition text-sm font-medium mb-1">
                                +91 98765 43210 <span class="text-slate-400 font-normal">(Principal)</span>
                            </a>
                            <a href="tel:+919876543211" class="block text-slate-600 hover:text-blue-700 transition text-sm font-medium mb-1">
                                +91 98765 43211 <span class="text-slate-400 font-normal">(Office)</span>
                            </a>
                            <a href="tel:+919876543212" class="block text-slate-600 hover:text-blue-700 transition text-sm font-medium">
                                +91 98765 43212 <span class="text-slate-400 font-normal">(Admissions)</span>
                            </a>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow flex gap-5 items-start">
                        <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl shadow-sm">
                            ✉️
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 font-['Outfit'] mb-1">Email Us</h3>
                            <div class="w-10 h-0.5 bg-amber-500 rounded-full mb-3"></div>
                            <a href="mailto:info@gyanodayvidyaniketan.edu.in" class="block text-slate-600 hover:text-blue-700 transition text-sm font-medium break-all mb-1">
                                info@gyanodayvidyaniketan.edu.in
                            </a>
                            <a href="mailto:admissions@gyanodayvidyaniketan.edu.in" class="block text-slate-600 hover:text-blue-700 transition text-sm font-medium break-all">
                                admissions@gyanodayvidyaniketan.edu.in
                            </a>
                        </div>
                    </div>

                    {{-- Office Hours --}}
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow flex gap-5 items-start">
                        <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl shadow-sm">
                            🕐
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 font-['Outfit'] mb-1">Office Hours</h3>
                            <div class="w-10 h-0.5 bg-purple-500 rounded-full mb-3"></div>
                            <div class="text-sm text-slate-600 space-y-1">
                                <div class="flex justify-between gap-4">
                                    <span class="font-medium">Mon – Sat</span>
                                    <span>8:00 AM – 4:00 PM</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="font-medium">Sunday</span>
                                    <span class="text-red-500">Closed</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="font-medium">School Hours</span>
                                    <span>7:30 AM – 2:30 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- RIGHT: Map --}}
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-3xl overflow-hidden shadow-xl border border-slate-100">
                        <div class="bg-gradient-to-r from-indigo-900 to-blue-900 px-6 py-4 flex items-center gap-3">
                            <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-lg">🗺️</div>
                            <div>
                                <h3 class="text-white font-bold font-['Outfit']">Find Us on the Map</h3>
                                <p class="text-indigo-300 text-xs">Gyanoday Vidya Niketan, Bhopal</p>
                            </div>
                        </div>
                        <div class="h-[420px] md:h-[500px]">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14686.792111586596!2d77.389849!3d23.034994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1716641234567!5m2!1sen!2sin"
                                width="100%"
                                height="100%"
                                style="border:0; display:block;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Gyanoday Vidya Niketan Location">
                            </iframe>
                        </div>
                        <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-sm text-slate-500">📍 Bhopal, Madhya Pradesh</span>
                            <a href="https://maps.google.com/?q=Bhopal,Madhya+Pradesh" target="_blank" rel="noopener noreferrer"
                               class="text-sm text-indigo-600 font-semibold hover:text-indigo-800 transition flex items-center gap-1">
                                Open in Maps
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== ENQUIRY FORM ===== --}}
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 bg-orange-100 text-orange-600 text-xs font-bold px-4 py-2 rounded-full mb-4 uppercase tracking-widest">
                    Send a Message
                </div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit']">Write to Us</h2>
                <p class="text-slate-500 mt-3 max-w-lg mx-auto">Have a question or want to schedule a visit? Fill in the form and we'll get back to you within 24 hours.</p>
            </div>

            @if(session('contact_success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 rounded-2xl px-6 py-4 flex items-center gap-3">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span class="font-medium">Thank you! Your message has been sent. We'll be in touch soon.</span>
            </div>
            @endif

            <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-8 md:p-10">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required
                                   value="{{ old('name') }}"
                                   placeholder="Your full name"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent text-slate-800 placeholder-slate-400 transition @error('name') border-red-400 @enderror">
                            @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2">Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" required
                                   value="{{ old('phone') }}"
                                   placeholder="+91 XXXXX XXXXX"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent text-slate-800 placeholder-slate-400 transition @error('phone') border-red-400 @enderror">
                            @error('phone')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                        <input type="email" id="email" name="email"
                               value="{{ old('email') }}"
                               placeholder="your@email.com"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent text-slate-800 placeholder-slate-400 transition @error('email') border-red-400 @enderror">
                        @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">Subject <span class="text-red-500">*</span></label>
                        <select id="subject" name="subject" required
                                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent text-slate-800 transition bg-white @error('subject') border-red-400 @enderror">
                            <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select a subject</option>
                            <option value="Admission Enquiry" {{ old('subject') == 'Admission Enquiry' ? 'selected' : '' }}>Admission Enquiry</option>
                            <option value="Fee Structure" {{ old('subject') == 'Fee Structure' ? 'selected' : '' }}>Fee Structure</option>
                            <option value="School Visit" {{ old('subject') == 'School Visit' ? 'selected' : '' }}>Schedule a School Visit</option>
                            <option value="Academic Query" {{ old('subject') == 'Academic Query' ? 'selected' : '' }}>Academic Query</option>
                            <option value="Transport" {{ old('subject') == 'Transport' ? 'selected' : '' }}>Transport / Bus Route</option>
                            <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('subject')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Message <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="5" required
                                  placeholder="Write your message here..."
                                  class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent text-slate-800 placeholder-slate-400 transition resize-none @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                        @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold px-10 py-4 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all text-base">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- ===== QUICK LINKS / SOCIAL ===== --}}
    <section class="py-12 bg-gradient-to-r from-indigo-900 to-slate-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center text-white">
                <div>
                    <div class="text-3xl mb-3">🏫</div>
                    <h4 class="font-bold text-lg font-['Outfit'] mb-2">Visit Us</h4>
                    <p class="text-slate-400 text-sm">We welcome parents and students to visit our campus. Please call ahead to schedule a guided tour.</p>
                </div>
                <div>
                    <div class="text-3xl mb-3">📋</div>
                    <h4 class="font-bold text-lg font-['Outfit'] mb-2">Admissions Open</h4>
                    <p class="text-slate-400 text-sm mb-4">Enroll your child for the upcoming academic year. Limited seats available.</p>
                    <a href="{{ url('/admission') }}" class="inline-flex items-center gap-1 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold px-5 py-2 rounded-full transition">
                        Apply Now →
                    </a>
                </div>
                <div>
                    <div class="text-3xl mb-3">💬</div>
                    <h4 class="font-bold text-lg font-['Outfit'] mb-2">Quick Connect</h4>
                    <p class="text-slate-400 text-sm mb-4">For urgent queries, call us directly during office hours.</p>
                    <a href="tel:+919876543210" class="inline-flex items-center gap-1 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold px-5 py-2 rounded-full transition">
                        📞 Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
