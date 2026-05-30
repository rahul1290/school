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
        ]);

        $section->update($validated);

        return redirect()->back()->with('success', 'your data has been stored');
    }

    public function uploadImage(Request $request, Section $section)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        // Since we don't have symlink setup or want it simple, move it directly to public/images/sections
        $file->move(public_path('images/sections'), $filename);

        $sortOrder = $section->images()->max('sort_order') + 1;

        $section->images()->create([
            'image_path' => 'images/sections/' . $filename,
            'sort_order' => $sortOrder,
            'is_active' => true,
        ]);

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
                    $sectionImage->update([
                        'sort_order' => $data['sort_order'] ?? 0,
                        'is_active' => isset($data['is_active']) ? true : false,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'your data has been stored');
    }
}
