<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(Request $request)
    {
        $query = Admission::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('mobile')) {
            $query->where(function($q) use ($request) {
                $q->where('father_mobile', 'like', '%' . $request->mobile . '%')
                  ->orWhere('mother_mobile', 'like', '%' . $request->mobile . '%');
            });
        }

        if ($request->filled('class')) {
            $query->where('class', $request->class);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        $admissions = $query->latest()->paginate(10)->withQueryString();

        return view('admin.admissions.index', compact('admissions'));
    }

    public function edit(Admission $admission)
    {
        return view('admin.admissions.edit', compact('admission'));
    }

    public function update(Request $request, Admission $admission)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending,Approved,Rejected',
            'admission_no' => 'nullable|string|max:255',
            'admission_date' => 'nullable|date',
            'verified_by' => 'nullable|string|max:255',
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

        $admission->update($validated);

        return redirect()->route('admin.admissions.index')->with('success', 'Admission updated successfully.');
    }

    public function print(Admission $admission)
    {
        return view('admin.admissions.print', compact('admission'));
    }
}
