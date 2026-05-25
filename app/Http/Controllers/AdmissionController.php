<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'dob' => 'required|date',
            'dob_words' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'caste' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'aadhaar_no' => 'required|string|max:255',
            'apaar_id' => 'required|string|max:255',
            'pen_no' => 'required|string|max:255',
            'bank_account_no' => 'required|string|max:255',
            
            'prev_school_name' => 'nullable|string|max:255',
            'prev_class' => 'nullable|string|max:255',
            'prev_passing_year' => 'nullable|string|max:255',
            'prev_medium' => 'nullable|string|max:255',
            'prev_board' => 'nullable|string|max:255',
            
            'father_name' => 'required|string|max:255',
            'father_aadhaar' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_mobile' => 'required|string|max:255',
            
            'mother_name' => 'required|string|max:255',
            'mother_aadhaar' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_mobile' => 'required|string|max:255',
            
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'pin_code' => 'required|string|max:255',
        ]);

        Admission::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
