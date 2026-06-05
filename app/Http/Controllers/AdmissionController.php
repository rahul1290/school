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
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\.\'\-]+$/'],
            'class' => 'required|string|max:255',
            'dob' => 'required|date',
            'dob_words' => 'required|string|max:255',
            'blood_group' => 'nullable|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
            'category' => 'required|string|max:255',
            'caste' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'aadhaar_no' => 'required|string|max:255',
            'apaar_id' => 'required|string|max:255',
            'pen_no' => 'nullable|string|max:255',
            'bank_account_no' => 'nullable|string|max:255',
            'ifsc_code' => 'nullable|string|max:255',
            
            'prev_school_name' => 'nullable|string|max:255',
            'prev_class' => 'nullable|string|max:255',
            'prev_passing_year' => 'nullable|string|max:255',
            'prev_medium' => 'nullable|string|max:255',
            'prev_board' => 'nullable|string|max:255',
            
            'father_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\.\'\-]+$/'],
            'father_aadhaar' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_mobile' => 'required|digits:10',
            
            'mother_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\.\'\-]+$/'],
            'mother_aadhaar' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_mobile' => 'required|digits:10',
            
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'pin_code' => 'required|string|max:255',
            'student_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('student_photo')) {
            $file = $request->file('student_photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/photos'), $filename);
            $validatedData['student_photo'] = 'uploads/photos/' . $filename;
        }

        Admission::create($validatedData);

        $redirect = redirect()->back()->with('success', 'Form submitted successfully!')->withInput();
        if (isset($validatedData['student_photo'])) {
            $redirect->with('student_photo', $validatedData['student_photo']);
        }
        return $redirect;
    }
}
