@extends('layouts.app')

@section('title', 'Admin - Admissions List')

@section('content')
<div class="bg-slate-50 py-12 pt-28 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Screen Header -->
        <div class="flex justify-between items-center mb-2 print:hidden">
            <h1 class="text-3xl font-extrabold text-slate-900 font-['Outfit']">Admissions</h1>
            
            <div class="flex items-center gap-4">
                <button type="button" onclick="window.print()" class="text-sm font-medium text-slate-700 bg-white px-4 py-2 rounded-lg border border-slate-300 shadow-sm hover:bg-slate-50 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                    Print
                </button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-white bg-slate-800 px-4 py-2 rounded-lg hover:bg-slate-900 transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Print Header -->
        <div class="hidden print:block mb-8">
            <div class="flex items-center justify-start gap-4 mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-auto object-contain">
                <h1 class="text-2xl font-extrabold text-slate-900 font-['Outfit'] uppercase tracking-wider text-left">Gyanoday Vidya Niketan</h1>
            </div>
            <div class="text-center">
                <h2 class="text-xl font-bold text-slate-800 font-['Outfit']">Admissions List</h2>
                <p class="text-sm text-slate-600 mt-1 font-medium">Printed on {{ now()->format('M d, Y h:i A') }}</p>
            </div>
        </div>
        
        <div class="flex space-x-4 border-b border-slate-200 mb-6 pb-2 print:hidden">
            <a href="{{ route('admin.admissions.index') }}" class="text-indigo-600 font-medium border-b-2 border-indigo-600 px-2">Admissions</a>
            <a href="{{ route('admin.homepage.index') }}" class="text-slate-500 hover:text-slate-700 font-medium px-2">Homepage Sections</a>
            <a href="{{ route('admin.pages.index') }}" class="text-slate-500 hover:text-slate-700 font-medium px-2">Pages</a>
        </div>

        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <div class="bg-white shadow rounded-lg mb-6 p-4 border border-slate-100 print:hidden">
            <form action="{{ route('admin.admissions.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Name</label>
                    <input type="text" name="name" value="{{ request('name') }}" placeholder="Search by name" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Mobile No.</label>
                    <input type="text" name="mobile" value="{{ request('mobile') }}" placeholder="Search by mobile" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Class</label>
                    <select name="class" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                        <option value="">All Classes</option>
                        <option value="Nursery" {{ request('class') == 'Nursery' ? 'selected' : '' }}>Nursery</option>
                        <option value="LKG" {{ request('class') == 'LKG' ? 'selected' : '' }}>LKG</option>
                        <option value="UKG" {{ request('class') == 'UKG' ? 'selected' : '' }}>UKG</option>
                        @for($i=1; $i<=12; $i++)
                            <option value="Class {{ $i }}" {{ request('class') == "Class $i" ? 'selected' : '' }}>Class {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Date</label>
                    <input type="date" name="date" value="{{ request('date') }}" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="w-full bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors">
                        Filter
                    </button>
                    <a href="{{ route('admin.admissions.index') }}" class="w-full text-center bg-slate-200 text-slate-700 font-medium py-2 px-4 rounded-lg hover:bg-slate-300 transition-colors">
                        Clear
                    </a>
                </div>
            </form>
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Applied</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider print:hidden">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($admissions as $admission)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $admission->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $admission->name }}</div>
                            <div class="text-sm text-gray-500">{{ $admission->father_mobile }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $admission->class }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $admission->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($admission->status === 'Pending')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            @elseif($admission->status === 'Approved')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Rejected</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium print:hidden">
                            <a href="{{ route('admin.admissions.edit', $admission) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Review</a>
                            <a href="{{ route('admin.admissions.print', $admission) }}" target="_blank" class="text-green-600 hover:text-green-900 flex items-center gap-1 inline-flex">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                                Print
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No admissions found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-4 print:hidden">
            {{ $admissions->links() }}
        </div>
        
    </div>
</div>

<style>
    @media print {
        @page { size: landscape; margin: 10mm; }
        body { background-color: white !important; }
        header, footer, nav, .print\:hidden { display: none !important; }
        .bg-slate-50 { background-color: white !important; padding: 0 !important; }
        .shadow { box-shadow: none !important; }
        .sm\:rounded-lg { border-radius: 0 !important; }
        
        table { border-collapse: collapse !important; width: 100% !important; }
        th, td { 
            border: 1px solid #cbd5e1 !important; 
            padding: 8px 12px !important;
            color: black !important;
        }
        th { background-color: #f8fafc !important; }
        
        /* Print Title */
        .max-w-6xl::before {
            content: "Admissions List";
            display: block;
            font-size: 20pt;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: black;
            text-transform: uppercase;
        }
    }
</style>
@endsection

