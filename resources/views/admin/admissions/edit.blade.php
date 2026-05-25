@extends('layouts.app')

@section('title', 'Admin - Review Admission')

@section('content')
<div class="bg-slate-50 py-12 pt-28 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.admissions.index') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">&larr; Back to Admissions</a>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-sm font-medium text-slate-600 hover:text-slate-900 bg-white px-4 py-2 rounded-lg border border-slate-200 shadow-sm transition-colors">
                    Logout
                </button>
            </form>
        </div>

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden mb-8">
            <div class="p-8 border-b border-slate-100 bg-slate-800">
                <h2 class="text-2xl font-bold text-white">Review Admission #{{ $admission->id }}</h2>
                <p class="text-slate-300 mt-1">Submitted on {{ $admission->created_at->format('M d, Y h:i A') }}</p>
            </div>

            <!-- Student Data (Read-only) -->
            <div class="p-8">
                <h3 class="text-xl font-bold text-slate-800 mb-4 border-b pb-2">Student Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <div><span class="text-gray-500 block text-sm">Name</span> <span class="font-medium">{{ $admission->name }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Class</span> <span class="font-medium">{{ $admission->class }}</span></div>
                    <div><span class="text-gray-500 block text-sm">DOB</span> <span class="font-medium">{{ $admission->dob }} ({{ $admission->dob_words }})</span></div>
                    <div><span class="text-gray-500 block text-sm">Gender</span> <span class="font-medium">{{ $admission->gender }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Category / Caste</span> <span class="font-medium">{{ $admission->category }} / {{ $admission->caste }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Nationality</span> <span class="font-medium">{{ $admission->nationality }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Aadhaar No</span> <span class="font-medium">{{ $admission->aadhaar_no }}</span></div>
                    <div><span class="text-gray-500 block text-sm">APAAR ID</span> <span class="font-medium">{{ $admission->apaar_id }}</span></div>
                    <div><span class="text-gray-500 block text-sm">PEN No</span> <span class="font-medium">{{ $admission->pen_no }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Bank Account No</span> <span class="font-medium">{{ $admission->bank_account_no }}</span></div>
                </div>

                <h3 class="text-xl font-bold text-slate-800 mb-4 border-b pb-2">Previous School Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <div><span class="text-gray-500 block text-sm">School Name</span> <span class="font-medium">{{ $admission->prev_school_name ?: 'N/A' }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Class</span> <span class="font-medium">{{ $admission->prev_class ?: 'N/A' }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Passing Year</span> <span class="font-medium">{{ $admission->prev_passing_year ?: 'N/A' }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Medium</span> <span class="font-medium">{{ $admission->prev_medium ?: 'N/A' }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Board</span> <span class="font-medium">{{ $admission->prev_board ?: 'N/A' }}</span></div>
                </div>

                <h3 class="text-xl font-bold text-slate-800 mb-4 border-b pb-2">Parent / Guardian Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <div><span class="text-gray-500 block text-sm">Father's Name</span> <span class="font-medium">{{ $admission->father_name }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Father's Mobile</span> <span class="font-medium">{{ $admission->father_mobile }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Father's Aadhaar</span> <span class="font-medium">{{ $admission->father_aadhaar }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Father's Occupation</span> <span class="font-medium">{{ $admission->father_occupation }}</span></div>
                    
                    <div class="col-span-2 border-t mt-2 pt-2"></div>
                    
                    <div><span class="text-gray-500 block text-sm">Mother's Name</span> <span class="font-medium">{{ $admission->mother_name }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Mother's Mobile</span> <span class="font-medium">{{ $admission->mother_mobile }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Mother's Aadhaar</span> <span class="font-medium">{{ $admission->mother_aadhaar }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Mother's Occupation</span> <span class="font-medium">{{ $admission->mother_occupation }}</span></div>
                </div>

                <h3 class="text-xl font-bold text-slate-800 mb-4 border-b pb-2">Residential Address</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div class="col-span-2"><span class="text-gray-500 block text-sm">Address</span> <span class="font-medium">{{ $admission->address_line_1 }} {{ $admission->address_line_2 }}</span></div>
                    <div><span class="text-gray-500 block text-sm">State</span> <span class="font-medium">{{ $admission->state }}</span></div>
                    <div><span class="text-gray-500 block text-sm">Pin Code</span> <span class="font-medium">{{ $admission->pin_code }}</span></div>
                </div>
            </div>
            
            <!-- Update Form -->
            <div class="p-8 bg-slate-50 border-t border-slate-200">
                <h3 class="text-xl font-bold text-slate-800 mb-6">Office Use Only (Update)</h3>
                
                @if($errors->any())
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.admissions.update', $admission) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                            <select name="status" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="Pending" {{ $admission->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Approved" {{ $admission->status === 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Rejected" {{ $admission->status === 'Rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Admission No.</label>
                            <input type="text" name="admission_no" value="{{ old('admission_no', $admission->admission_no) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Admission Date</label>
                            <input type="date" name="admission_date" value="{{ old('admission_date', $admission->admission_date) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Verified By</label>
                            <input type="text" name="verified_by" value="{{ old('verified_by', $admission->verified_by) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition-colors">
                            Update Record
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
