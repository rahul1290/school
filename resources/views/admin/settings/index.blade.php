@extends('layouts.admin')

@section('title', 'Admin - Settings')

@section('content')
<div>
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-slate-800 tracking-tight">System Settings</h1>
        <p class="text-slate-500 mt-1">Manage global configurations for your website.</p>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-6 rounded-lg relative" role="alert">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-6 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow-sm rounded-2xl border border-slate-200 overflow-hidden">
        <form action="{{ route('admin.settings.update') }}" method="POST" class="p-8">
            @csrf
            @method('PUT')
            
            <div class="space-y-8">
                <!-- Contact Form Settings -->
                <div>
                    <h3 class="text-lg font-bold text-slate-800 mb-4 pb-2 border-b border-slate-100">Contact Form Settings</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-1">Receiver Email Address</label>
                            <p class="text-xs text-slate-500 mb-2">The email address where "Write to us" submissions will be sent.</p>
                            <input type="email" name="contact_email_receiver" value="{{ old('contact_email_receiver', $settings['contact_email_receiver'] ?? '') }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="e.g. admin@gyanodayvidyaniketan.edu.in">
                        </div>
                    </div>
                </div>
                
                <!-- Future Settings can be added here -->
            </div>

            <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end">
                <button type="submit" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-md hover:bg-indigo-700 hover:-translate-y-0.5 transition-all">
                    Save Settings
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
