<div class="mt-12 bg-white rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.08)] overflow-hidden border border-slate-100 p-8 md:p-12 max-w-4xl mx-auto">
    
    <div class="text-center mb-10">
        <h3 class="text-3xl font-bold text-slate-800 font-['Outfit']">Write to Us</h3>
        <p class="mt-3 text-slate-500 text-lg">Fill out the form and our team will get back to you within 24 hours.</p>
        <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 rounded-full"></div>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 mb-8 rounded-xl relative shadow-sm flex items-start gap-4">
            <span class="text-2xl">✅</span>
            <div>
                <h4 class="font-bold text-lg mb-1">Thank You!</h4>
                <span class="block">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" required class="w-full px-5 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all outline-none @error('full_name') border-red-500 @enderror" placeholder="John Doe">
                @error('full_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-5 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all outline-none @error('email') border-red-500 @enderror" placeholder="john@example.com">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Contact No <span class="text-red-500">*</span></label>
                <input type="tel" name="contact_no" value="{{ old('contact_no') }}" required class="w-full px-5 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all outline-none @error('contact_no') border-red-500 @enderror" placeholder="+91 xxxxx xxxxx">
                @error('contact_no') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Subject <span class="text-red-500">*</span></label>
                <input type="text" name="subject" value="{{ old('subject') }}" required class="w-full px-5 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all outline-none @error('subject') border-red-500 @enderror" placeholder="How can we help?">
                @error('subject') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-2">Main Body <span class="text-red-500">*</span></label>
            <textarea name="message" rows="5" required class="w-full px-5 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:bg-white transition-all outline-none resize-none @error('message') border-red-500 @enderror" placeholder="Write your message here...">{{ old('message') }}</textarea>
            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="pt-4 text-center">
            <button type="submit" class="w-full sm:w-auto px-10 py-3.5 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 hover:shadow-xl hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2 mx-auto">
                <span>Send Message</span>
                <span>🚀</span>
            </button>
        </div>
    </form>
</div>
