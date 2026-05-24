@extends('layouts.app')

@section('title', 'Admission Form - Gyanoday Vidya Niketan')

@section('content')
<div class="bg-slate-50 py-12 pt-28 print:pt-0 print:py-0 print:bg-white min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 print:px-0">
        
        <!-- Header -->
        <div class="text-center mb-10 print:mb-6">
            <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 font-['Outfit'] mb-2 print:text-2xl">Admission Form</h1>
            <p class="text-xl text-slate-600 print:text-base">Academic Session 2026-27</p>
        </div>

        <form onsubmit="event.preventDefault(); alert('Form submitted successfully!');" class="bg-white shadow-xl rounded-2xl overflow-hidden print:shadow-none print:bg-transparent print:border-none print:rounded-none">
            <!-- 1. Student Information -->
            <div class="p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">1. Student Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 print:grid-cols-2 print:gap-4">
                    <div class="md:col-span-2 print:col-span-2 flex gap-4">
                        <div class="flex-grow">
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Name</label>
                            <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                        <div class="w-1/3">
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Class</label>
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
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Date of Birth</label>
                        <input type="date" required id="dob_input" onchange="document.getElementById('dob_words').value = convertDateToWords(this.value);" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">In words</label>
                        <input type="text" id="dob_words" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Caste</label>
                        <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value="">Select Caste</option>
                            <option value="General">General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Category</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Gender</label>
                        <select required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:appearance-none print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none bg-white">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Nationality</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Aadhaar No.</label>
                        <input type="number" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">APAAR ID</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">PEN No.</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Bank Account No.</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                </div>
            </div>

            <!-- 2. Previous School Details -->
            <div class="p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">2. Previous School Academic Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 print:grid-cols-2 print:gap-4">
                    <div class="md:col-span-2 print:col-span-2">
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Previous School Detail Name</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Class</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Year of Passing</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Medium of Instruction</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">School Board</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                </div>
            </div>

            <!-- 3. Parent / Guardian Details -->
            <div class="p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">3. Parent / Guardian Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 print:grid-cols-2 print:gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Father's Name</label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Aadhaar No.</label>
                        <input type="number" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Occupation</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Mob. No.</label>
                        <input type="tel" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>

                    <!-- Spacer / Divider -->
                    <div class="md:col-span-2 print:col-span-2 border-t border-slate-100 my-2 print:my-0"></div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Mother's Name</label>
                        <input type="text" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Aadhaar No.</label>
                        <input type="number" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Occupation</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Mob. No.</label>
                        <input type="tel" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                </div>
            </div>

            <!-- Page break for print here so we don't awkwardly split things -->
            <div class="hidden print:block" style="page-break-before: always;"></div>

            <!-- 4. Residential Address -->
            <div class="p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800 print:mt-4">
                <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg print:bg-transparent print:p-0 print:border-b print:border-slate-800 print:text-lg">4. Residential Address</h2>
                <div class="space-y-6 print:space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Current Address</label>
                        <input type="text" class="w-full px-4 py-2 mb-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none print:mb-2">
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 print:grid-cols-3 print:gap-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">City</label>
                            <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">State</label>
                            <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1 print:text-xs">Pin Code</label>
                            <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 print:border-0 print:border-b print:border-slate-400 print:px-0 print:rounded-none">
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Declaration -->
            <div class="p-8 print:p-4 print:border-b-2 print:border-slate-800">
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
            <div class="p-8 border-b border-slate-100 print:p-4 print:border-b-2 print:border-slate-800">
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
            <div class="p-8 bg-slate-50 border-t-4 border-dashed border-slate-300 print:p-4 print:bg-transparent print:border-slate-800 print:border-t-2 print:border-dashed">
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
            <div class="p-8 bg-slate-100 flex flex-col sm:flex-row justify-center gap-4 print:hidden">
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
        body {
            background-color: white !important;
            color: black !important;
            font-size: 12pt;
        }
        /* Hide app header and footers */
        header, footer, .bottom-0, .print\:hidden {
            display: none !important;
        }
        /* Reset form inputs to look like a physical form */
        input[type="text"], input[type="number"], input[type="tel"], input[type="date"], select {
            color: black !important;
            border-radius: 0 !important;
            padding: 2px 0 !important;
            background: transparent !important;
            height: auto !important;
            line-height: 1.2 !important;
            box-shadow: none !important;
            -webkit-appearance: none;
            appearance: none;
        }
        /* Ensure checkboxes show when printed */
        input[type="checkbox"], input[type="radio"] {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
            background-color: white !important;
            border-color: black !important;
            border: 1px solid black !important;
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
</script>

@endsection
