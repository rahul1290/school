<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\SectionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('admin.homepage.index', compact('sections'));
    }

    public function edit(Section $section)
    {
        $section->load('images');
        return view('admin.homepage.edit', compact('section'));
    }

    public function update(Request $request, Section $section)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle_top' => 'nullable|string|max:255',
            'subtitle_bottom' => 'nullable|string|max:255',
            'title_font' => 'nullable|string|max:100',
            'title_color' => 'nullable|string|max:20',
            'subtitle_color' => 'nullable|string|max:20',
        ]);

        $section->update($validated);

        return redirect()->back()->with('success', 'your data has been stored');
    }

    public function uploadImage(Request $request, Section $section)
    {
        $rules = [
            'image' => 'required|image|max:2048',
        ];

        if ($section->identifier === 'excellence') {
            $rules['student_name'] = 'nullable|string|max:255';
            $rules['student_title'] = 'nullable|string|max:255';
            $rules['student_description'] = 'nullable|string';
        }

        $request->validate($rules);

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        // Since we don't have symlink setup or want it simple, move it directly to public/images/sections
        $file->move(public_path('images/sections'), $filename);

        $sortOrder = $section->images()->max('sort_order') + 1;

        $imageData = [
            'image_path' => 'images/sections/' . $filename,
            'sort_order' => $sortOrder,
            'is_active' => true,
        ];

        if ($section->identifier === 'excellence') {
            $imageData['student_name'] = $request->input('student_name');
            $imageData['title'] = $request->input('student_title');
            $imageData['description'] = $request->input('student_description');
        }

        $section->images()->create($imageData);

        return redirect()->back()->with('success', 'your data has been stored');
    }

    public function updateImages(Request $request, Section $section)
    {
        $images = $request->input('images', []);
        
        foreach ($images as $id => $data) {
            $sectionImage = SectionImage::find($id);
            if ($sectionImage && $sectionImage->section_id === $section->id) {
                if (isset($data['delete']) && $data['delete'] == 1) {
                    if (file_exists(public_path($sectionImage->image_path))) {
                        unlink(public_path($sectionImage->image_path));
                    }
                    $sectionImage->delete();
                } else {
                    $updateData = [
                        'sort_order' => $data['sort_order'] ?? 0,
                        'is_active' => isset($data['is_active']) ? true : false,
                    ];

                    if ($section->identifier === 'excellence') {
                        $updateData['student_name'] = $data['student_name'] ?? null;
                        $updateData['title'] = $data['student_title'] ?? null;
                        $updateData['description'] = $data['student_description'] ?? null;
                    }

                    $sectionImage->update($updateData);
                }
            }
        }

        return redirect()->back()->with('success', 'your data has been stored');
    }
}
