@extends('layouts.app')

@section('title', 'Admission Form - Gyanoday Vidya Niketan')

@section('content')
<div class="bg-slate-50 py-12 pt-28 print:pt-0 print:py-0 print:bg-transparent min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 print:px-0">
        
        <!-- Header -->
        <div class="flex flex-col items-center justify-center text-center mb-10 print:mb-2 gap-2 print:gap-0">
            <div class="flex items-center justify-center gap-4 print:gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 md:h-16 w-auto object-contain print:h-10">
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit'] print:text-xl">Admission Form</h1>
            </div>
            <p class="text-xl text-slate-600 print:text-sm mt-2 print:mt-0">Academic Session 2026-27</p>
        </div>

        <form onsubmit="event.preventDefault(); alert('Form submitted successfully!');" class="relative bg-white shadow-xl rounded-2xl overflow-hidden print:shadow-none print:bg-transparent print:border-none print:rounded-none">
            
            <!-- Background Logo -->
            <div class="absolute inset-0 z-0 flex items-center justify-center pointer-events-none overflow-hidden opacity-[0.03] print-watermark-container">
                <img src="{{ asset('images/logo.png') }}" alt="Background Logo" class="w-[80%] max-w-2xl h-auto object-contain grayscale">
            </div>

            <!-- 1. Student Information -->
            <div class="relative z-10 p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">1. Student Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 print:grid-cols-2 print:gap-4">
                    <div class="md:col-span-2 print:col-span-2 flex gap-4">
                        <div class="flex-grow">
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Name <span class="text-red-500">*</span></label>
                            <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                        <div class="w-1/3">
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Class <span class="text-red-500">*</span></label>
                            <select required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                                <option value="">Select Class</option>
                                <option value="Nursery">Nursery</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                                <option value="6">6th</option>
                                <option value="7">7th</option>
                                <option value="8">8th</option>
                                <option value="9">9th</option>
                                <option value="10">10th</option>
                                <option value="11">11th</option>
                                <option value="12">12th</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Date of Birth <span class="text-red-500">*</span></label>
                        <input type="date" required id="dob_input" onchange="document.getElementById('dob_words').value = convertDateToWords(this.value);" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">In words <span class="text-red-500">*</span></label>
                        <input type="text" id="dob_words" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Category <span class="text-red-500">*</span></label>
                        <select required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="">Select Category</option>
                            <option value="General">General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Caste (जाति) <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter Caste" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Gender <span class="text-red-500">*</span></label>
                        <select required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Nationality <span class="text-red-500">*</span></label>
                        <select required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="Indian">Indian</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Aadhaar No. <span class="text-red-500">*</span></label>
                        <input type="number" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">APAAR ID <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">PEN No. <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Bank Account No. <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                </div>
            </div>

            <!-- 2. Previous School Details -->
            <div class="relative z-10 p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">2. Previous School Academic Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 print:grid-cols-2 print:gap-4">
                    <div class="md:col-span-2 print:col-span-2">
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Previous School Detail Name</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Class</label>
                        <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="">Select Class</option>
                            <option value="Nursery">Nursery</option>
                            <option value="LKG">LKG</option>
                            <option value="UKG">UKG</option>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="11">11th</option>
                            <option value="12">12th</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Year of Passing</label>
                        <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="">Select Year</option>
                            @for($i = date('Y'); $i >= 2010; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Medium of Instruction</label>
                        <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="">Select Medium</option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">School Board</label>
                        <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="">Select Board</option>
                            <option value="CBSE">CBSE</option>
                            <option value="State Board">State Board</option>
                            <option value="NIOS">NIOS</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- 3. Parent / Guardian Details -->
            <div class="relative z-10 p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">3. Parent / Guardian Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 print:grid-cols-2 print:gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Father's Name <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Aadhaar No. <span class="text-red-500">*</span></label>
                        <input type="number" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Occupation <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Mob. No. <span class="text-red-500">*</span></label>
                        <input type="tel" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>

                    <!-- Spacer / Divider -->
                    <div class="md:col-span-2 print:col-span-2 border-t border-slate-100 my-2 print:my-0"></div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Mother's Name <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Aadhaar No. <span class="text-red-500">*</span></label>
                        <input type="number" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Occupation <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Mob. No. <span class="text-red-500">*</span></label>
                        <input type="tel" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                </div>
            </div>

            <!-- 4. Residential Address -->
            <div class="relative z-10 p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">4. Residential Address</h2>
                <div class="space-y-6 print:space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Current Address <span class="text-red-500">*</span></label>
                        <input type="text" required class="w-full px-4 py-2 mb-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none print:mb-2">
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 print:grid-cols-3 print:gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">City <span class="text-red-500">*</span></label>
                            <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">State <span class="text-red-500">*</span></label>
                            <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Pin Code <span class="text-red-500">*</span></label>
                            <input type="text" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Declaration -->
            <div class="relative z-10 p-8 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">5. Declaration By Parent / Guardian</h2>
                
                <div class="mb-10 print:mb-6">
                    <label class="flex items-start gap-3">
                        <input type="checkbox" required class="mt-1 h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded print:border-slate-600 print:appearance-auto">
                        <span class="text-slate-700 leading-relaxed text-sm md:text-base print:text-sm">
                            I hereby declare that all the information provided above is true and correct to the best of my knowledge and belief. If any information is found to be false, the school authorities reserve the right to cancel the admission.
                        </span>
                    </label>
                </div>

                <div class="flex justify-between items-end mt-12 pt-8 print:mt-6 print:pt-4">
                    <div class="w-40 border-b-2 border-slate-800 text-center pb-2 font-medium text-slate-700 print:text-sm">Date</div>
                    <div class="w-64 border-b-2 border-slate-800 text-center pb-2 font-medium text-slate-700 print:text-sm">Parent / Guardian Signature</div>
                </div>
            </div>

            <!-- Checklist -->
            <div class="relative z-10 p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">Enclosures / Checklist of Required Documents</h2>
                <div class="space-y-3 print:space-y-2">
                    @php
                        $documents = [
                            '1. Photocopy of Birth Certificate',
                            '2. Photocopy of Adhar Card',
                            '3. Photocopy of Cast Certificate',
                            '4. Photocopy of Residence certificate',
                            '5. Passport size photographs of students (2 copies)',
                            '6. Previous School Report card/Marksheet',
                            '7. Original Transfer Certificate',
                            '8. Migration Certificate (if applicable)',
                            '9. Photocopy of Adhar card of parents'
                        ];
                    @endphp
                    @foreach($documents as $doc)
                    <label class="flex items-start gap-3">
                        <input type="checkbox" class="mt-1 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded print:border-slate-600 print:appearance-auto print:checked:bg-white print:checked:border-black">
                        <span class="text-slate-700 print:text-sm">{{ $doc }}</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <!-- Office Use Only -->
            <div class="relative z-10 p-8 bg-slate-50 border-t-4 border-dashed border-slate-300 print:p-4 print:bg-transparent print:border-slate-800 print:border-t-2 print:border-dashed">
                <div class="text-center mb-8 print:mb-4">
                    <h2 class="text-xl font-bold text-slate-800 uppercase tracking-wider inline-block border-2 border-slate-800 px-6 py-2 print:text-lg">For School Office Use Only</h2>
                </div>
                
                <div class="space-y-8 print:space-y-6">
                    <div class="flex flex-wrap items-center gap-6">
                        <span class="font-bold text-slate-800 print:text-sm">Admission status:</span>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="h-5 w-5 text-indigo-600 border-slate-400 print:border-slate-800 print:appearance-auto">
                            <span class="text-slate-700 font-medium print:text-sm">Approved</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="h-5 w-5 text-red-600 border-slate-400 print:border-slate-800 print:appearance-auto">
                            <span class="text-slate-700 font-medium print:text-sm">Rejected</span>
                        </label>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 print:grid-cols-2 print:gap-6">
                        <div>
                            <label class="block font-bold text-slate-800 mb-1 print:text-sm">Admission No.</label>
                            <div class="h-8 border-b-2 border-slate-400 w-full print:border-slate-800 print:h-6"></div>
                        </div>
                        <div>
                            <label class="block font-bold text-slate-800 mb-1 print:text-sm">Date</label>
                            <div class="h-8 border-b-2 border-slate-400 w-full print:border-slate-800 print:h-6"></div>
                        </div>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-800 mb-1 print:text-sm">Verified By</label>
                        <div class="h-8 border-b-2 border-slate-400 w-full md:w-1/2 print:border-slate-800 print:h-6"></div>
                    </div>

                    <div class="flex justify-end pt-8 print:pt-4">
                        <div class="w-64 border-b-2 border-slate-800 text-center pb-2 font-bold text-slate-800 print:text-sm">Admission In-charge Signature</div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="relative z-10 p-8 bg-slate-100 flex flex-col sm:flex-row justify-center gap-4 print:hidden">
                <button type="submit" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all w-full sm:w-auto text-lg">
                    Submit Application
                </button>
                <button type="button" onclick="window.print()" class="px-8 py-3 bg-white border-2 border-slate-300 text-slate-700 font-bold rounded-xl shadow-sm hover:bg-slate-50 transition-all w-full sm:w-auto flex items-center justify-center gap-2 text-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                    Print Form
                </button>
            </div>
        </form>

    </div>
</div>

<style>
    /* Print Styles */
    @media print {
        @page {
            size: auto;
            margin: 8mm;
        }
        body {
            background-color: white !important;
            color: black !important;
            font-size: 10pt !important;
        }
        /* Hide app header and footers */
        header, footer, .bottom-0, .print\:hidden {
            display: none !important;
        }
        
        /* Form Container Magic */
        form {
            border: 2px solid #0f172a !important;
            border-radius: 0 !important;
            padding: 0 !important;
            box-shadow: none !important;
            background: transparent !important;
        }

        /* Print Watermark - Fixed to center of every page */
        .print-watermark-container {
            position: fixed !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            z-index: 0 !important;
            width: 100% !important;
            height: 100% !important;
            opacity: 1 !important;
        }
        .print-watermark-container img {
            width: 60% !important;
            max-width: 500px !important;
            opacity: 0.15 !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* Section Styling */
        form > div.relative.z-10 {
            border-bottom: 2px solid #0f172a !important;
            padding: 0.4rem 1rem !important;
            page-break-inside: avoid;
        }
        form > div.relative.z-10:last-of-type {
            border-bottom: none !important;
        }

        /* Section Headers */
        form > div.relative.z-10 > h2:first-child {
            background-color: #e2e8f0 !important;
            color: #0f172a !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
            padding: 0.2rem 1rem !important;
            margin: -0.4rem -1rem 0.4rem -1rem !important;
            border-bottom: 2px solid #0f172a !important;
            border-radius: 0 !important;
            font-size: 10pt !important;
            font-weight: bold !important;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Tighter Grid & Spacing */
        .grid {
            gap: 0.5rem !important;
        }
        .space-y-6 > :not([hidden]) ~ :not([hidden]),
        .space-y-8 > :not([hidden]) ~ :not([hidden]),
        .space-y-3 > :not([hidden]) ~ :not([hidden]),
        .space-y-4 > :not([hidden]) ~ :not([hidden]) {
            margin-top: 0.4rem !important;
        }
        .mb-10, .mb-8, .mb-6 {
            margin-bottom: 0.4rem !important;
        }
        .mt-12 {
            margin-top: 0.8rem !important;
        }
        .pt-8 {
            padding-top: 0.4rem !important;
        }

        /* Reset form inputs to look like a physical form */
        input[type="text"], input[type="number"], input[type="tel"], input[type="date"], select {
            color: black !important;
            border-radius: 0 !important;
            border: none !important;
            border-bottom: 1px dashed #64748b !important;
            padding: 1px 0 !important;
            background: transparent !important;
            height: auto !important;
            line-height: 1.1 !important;
            box-shadow: none !important;
            -webkit-appearance: none !important;
            appearance: none !important;
            font-size: 10pt !important;
            font-weight: 500 !important;
        }
        
        /* Labels */
        label {
            font-size: 8pt !important;
            text-transform: uppercase !important;
            letter-spacing: 0.02em !important;
            color: #475569 !important;
            margin-bottom: 0px !important;
        }

        /* Ensure checkboxes show when printed */
        input[type="checkbox"], input[type="radio"] {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
            background-color: white !important;
            border-color: #0f172a !important;
            border: 2px solid #0f172a !important;
            width: 1rem !important;
            height: 1rem !important;
            margin-top: 0 !important;
        }
    }
</style>

<script>
function convertDateToWords(dateString) {
    if (!dateString) return '';
    const date = new Date(dateString);
    if (isNaN(date.getTime())) return '';
    
    const day = date.getDate();
    const month = date.toLocaleString('default', { month: 'long' });
    const year = date.getFullYear();
    
    const ordinals = ["", "First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth", 
    "Eleventh", "Twelfth", "Thirteenth", "Fourteenth", "Fifteenth", "Sixteenth", "Seventeenth", "Eighteenth", "Nineteenth", "Twentieth",
    "Twenty-first", "Twenty-second", "Twenty-third", "Twenty-fourth", "Twenty-fifth", "Twenty-sixth", "Twenty-seventh", "Twenty-eighth", "Twenty-ninth", "Thirtieth", "Thirty-first"];
    
    const dayStr = ordinals[day];
    
    const numToWords = (num) => {
        const a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
        const b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];
        
        if (num === 0) return 'Zero';
        if (num < 20) return a[num];
        if (num < 100) return b[Math.floor(num / 10)] + (num % 10 ? ' ' + a[num % 10] : '');
        if (num < 1000) return a[Math.floor(num / 100)] + 'Hundred ' + (num % 100 ? numToWords(num % 100) : '');
        if (num < 100000) return numToWords(Math.floor(num / 1000)) + 'Thousand ' + (num % 1000 ? numToWords(num % 1000) : '');
        return num.toString();
    };
    
    const yearStr = numToWords(year).trim();
    return `${dayStr} of ${month} ${yearStr}`;
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    // Add red border when field is invalid on submit attempt
    form.addEventListener('invalid', function(e) {
        e.target.classList.add('border-red-500', 'focus:ring-red-500');
        e.target.classList.remove('border-slate-300', 'focus:ring-indigo-500');
    }, true);

    // Remove red border when user inputs valid data
    form.addEventListener('input', function(e) {
        if (e.target.validity.valid) {
            e.target.classList.remove('border-red-500', 'focus:ring-red-500');
            e.target.classList.add('border-slate-300', 'focus:ring-indigo-500');
        }
    });
});
</script>

@endsection
