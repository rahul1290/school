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
        ]);

        $admission->update($validated);

        return redirect()->route('admin.admissions.index')->with('success', 'Admission updated successfully.');
    }
}
