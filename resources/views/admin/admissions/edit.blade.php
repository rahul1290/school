@extends('layouts.admin')

@section('title', 'Admin - Edit Admission')

@section('content')
<div>
    <div>
        
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.admissions.index') }}" class="text-indigo-600 hover:text-indigo-900 font-semibold flex items-center gap-2">
                &larr; Back to Admissions List
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden mb-8">
            <div class="p-8 border-b border-slate-100 bg-slate-800">
                <h2 class="text-2xl font-bold text-white">Edit Admission #{{ $admission->id }}</h2>
                <p class="text-slate-300 mt-1">Submitted on {{ $admission->created_at->format('M d, Y h:i A') }}</p>
            </div>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 m-8 mb-0 rounded relative" role="alert">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.admissions.update', $admission) }}" method="POST" class="relative">
                @csrf
                @method('PUT')
                
                <!-- 1. Student Information -->
                <div class="relative z-10 p-8 border-b border-slate-100">
                    <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg">1. Student Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2 flex gap-4">
                            <div class="flex-grow">
                                <label class="block text-sm font-medium text-slate-700 mb-1">Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name', $admission->name) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                            </div>
                            <div class="w-1/3">
                                <label class="block text-sm font-medium text-slate-700 mb-1">Class <span class="text-red-500">*</span></label>
                                <select name="class" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white" id="classSelect">
                                    <option value="">Select Class</option>
                                    @foreach(['Nursery','LKG','UKG','1','2','3','4','5','6','7','8','9','10','11','12'] as $cls)
                                        <option value="{{ $cls == '1' ? '1st' : ($cls == '2' ? '2nd' : ($cls == '3' ? '3rd' : ($cls == 'Nursery' || $cls == 'LKG' || $cls == 'UKG' ? $cls : $cls.'th'))) }}" {{ old('class', $admission->class) == ($cls == '1' ? '1st' : ($cls == '2' ? '2nd' : ($cls == '3' ? '3rd' : ($cls == 'Nursery' || $cls == 'LKG' || $cls == 'UKG' ? $cls : $cls.'th')))) ? 'selected' : '' }}>{{ $cls == '1' ? '1st' : ($cls == '2' ? '2nd' : ($cls == '3' ? '3rd' : ($cls == 'Nursery' || $cls == 'LKG' || $cls == 'UKG' ? $cls : $cls.'th'))) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" name="dob" value="{{ old('dob', $admission->dob) }}" required id="dob_input" onchange="document.getElementById('dob_words').value = convertDateToWords(this.value);" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">In words <span class="text-red-500">*</span></label>
                            <input type="text" name="dob_words" value="{{ old('dob_words', $admission->dob_words) }}" id="dob_words" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Category <span class="text-red-500">*</span></label>
                            <select name="category" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                @foreach(['General', 'OBC', 'SC', 'ST', 'Other'] as $cat)
                                    <option value="{{ $cat }}" {{ old('category', $admission->category) == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Caste (जाति) <span class="text-red-500">*</span></label>
                            <input type="text" name="caste" value="{{ old('caste', $admission->caste) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Gender <span class="text-red-500">*</span></label>
                            <select name="gender" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                @foreach(['Male', 'Female', 'Other'] as $gen)
                                    <option value="{{ $gen }}" {{ old('gender', $admission->gender) == $gen ? 'selected' : '' }}>{{ $gen }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Nationality <span class="text-red-500">*</span></label>
                            <select name="nationality" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                @foreach(['Indian', 'Other'] as $nat)
                                    <option value="{{ $nat }}" {{ old('nationality', $admission->nationality) == $nat ? 'selected' : '' }}>{{ $nat }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Aadhaar No. <span class="text-red-500">*</span></label>
                            <input type="number" name="aadhaar_no" value="{{ old('aadhaar_no', $admission->aadhaar_no) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">APAAR ID <span class="text-red-500">*</span></label>
                            <input type="text" name="apaar_id" value="{{ old('apaar_id', $admission->apaar_id) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">PEN No. <span class="text-red-500">*</span></label>
                            <input type="text" name="pen_no" value="{{ old('pen_no', $admission->pen_no) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Bank Account No. <span class="text-red-500">*</span></label>
                            <input type="text" name="bank_account_no" value="{{ old('bank_account_no', $admission->bank_account_no) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>
                </div>

                <!-- 2. Previous School Details -->
                <div class="relative z-10 p-8 border-b border-slate-100">
                    <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg">2. Previous School Academic Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-slate-700 mb-1">Previous School Detail Name</label>
                            <input type="text" name="prev_school_name" value="{{ old('prev_school_name', $admission->prev_school_name) }}" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Class</label>
                            <select name="prev_class" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="">Select Class</option>
                                @foreach(['Nursery','LKG','UKG','1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th','11th','12th'] as $cls)
                                    <option value="{{ $cls }}" {{ old('prev_class', $admission->prev_class) == $cls ? 'selected' : '' }}>{{ $cls }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Year of Passing</label>
                            <select name="prev_passing_year" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="">Select Year</option>
                                @for($i = date('Y'); $i >= 2010; $i--)
                                    <option value="{{ $i }}" {{ old('prev_passing_year', $admission->prev_passing_year) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Medium of Instruction</label>
                            <select name="prev_medium" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="">Select Medium</option>
                                @foreach(['English', 'Hindi', 'Other'] as $med)
                                    <option value="{{ $med }}" {{ old('prev_medium', $admission->prev_medium) == $med ? 'selected' : '' }}>{{ $med }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">School Board</label>
                            <select name="prev_board" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="">Select Board</option>
                                @foreach(['CBSE', 'State Board', 'NIOS', 'Other'] as $board)
                                    <option value="{{ $board }}" {{ old('prev_board', $admission->prev_board) == $board ? 'selected' : '' }}>{{ $board }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- 3. Parent / Guardian Details -->
                <div class="relative z-10 p-8 border-b border-slate-100">
                    <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg">3. Parent / Guardian Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Father's Name <span class="text-red-500">*</span></label>
                            <input type="text" name="father_name" value="{{ old('father_name', $admission->father_name) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Aadhaar No. <span class="text-red-500">*</span></label>
                            <input type="number" name="father_aadhaar" value="{{ old('father_aadhaar', $admission->father_aadhaar) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Occupation <span class="text-red-500">*</span></label>
                            <input type="text" name="father_occupation" value="{{ old('father_occupation', $admission->father_occupation) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Mob. No. <span class="text-red-500">*</span></label>
                            <input type="tel" name="father_mobile" value="{{ old('father_mobile', $admission->father_mobile) }}" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>

                        <div class="md:col-span-2 border-t border-slate-100 my-2"></div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Mother's Name <span class="text-red-500">*</span></label>
                            <input type="text" name="mother_name" value="{{ old('mother_name', $admission->mother_name) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Aadhaar No. <span class="text-red-500">*</span></label>
                            <input type="number" name="mother_aadhaar" value="{{ old('mother_aadhaar', $admission->mother_aadhaar) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Occupation <span class="text-red-500">*</span></label>
                            <input type="text" name="mother_occupation" value="{{ old('mother_occupation', $admission->mother_occupation) }}" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Mob. No. <span class="text-red-500">*</span></label>
                            <input type="tel" name="mother_mobile" value="{{ old('mother_mobile', $admission->mother_mobile) }}" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                        </div>
                    </div>
                </div>

                <!-- 4. Residential Address -->
                <div class="relative z-10 p-8 border-b border-slate-100">
                    <h2 class="text-xl font-bold text-slate-800 mb-6 bg-slate-100 p-3 rounded-lg">4. Residential Address</h2>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Current Address <span class="text-red-500">*</span></label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" name="address_line_1" value="{{ old('address_line_1', $admission->address_line_1) }}" placeholder="Line 1" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                                <input type="text" name="address_line_2" value="{{ old('address_line_2', $admission->address_line_2) }}" placeholder="Line 2" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">State <span class="text-red-500">*</span></label>
                                <select name="state" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                    <option value="">Select State</option>
                                    @php
                                        $states = [
                                            "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", 
                                            "Haryana", "Himachal Pradesh", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", 
                                            "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", 
                                            "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal", 
                                            "Andaman and Nicobar Islands", "Chandigarh", "Dadra and Nagar Haveli and Daman and Diu", 
                                            "Delhi", "Lakshadweep", "Puducherry", "Ladakh", "Jammu and Kashmir"
                                        ];
                                    @endphp
                                    @foreach($states as $st)
                                        <option value="{{ $st }}" {{ old('state', $admission->state) == $st ? 'selected' : '' }}>{{ $st }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Pin Code <span class="text-red-500">*</span></label>
                                <input type="text" name="pin_code" value="{{ old('pin_code', $admission->pin_code) }}" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Office Use Only -->
                <div class="relative z-10 p-8 bg-slate-50 border-t border-slate-200">
                    <h3 class="text-xl font-bold text-slate-800 mb-6">Office Use Only (Update Status)</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Status</label>
                            <select name="status" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 bg-white">
                                <option value="Pending" {{ old('status', $admission->status) === 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Approved" {{ old('status', $admission->status) === 'Approved' ? 'selected' : '' }}>Approved</option>
                                <option value="Rejected" {{ old('status', $admission->status) === 'Rejected' ? 'selected' : '' }}>Rejected</option>
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
                </div>

                <!-- Action Buttons -->
                <div class="relative z-10 p-8 bg-slate-100 flex flex-col sm:flex-row justify-end gap-4 border-t">
                    <a href="{{ route('admin.admissions.index') }}" class="px-8 py-3 bg-white border border-slate-300 text-slate-700 font-bold rounded-xl shadow-sm hover:bg-slate-50 transition-all text-center">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition-all text-center">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

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