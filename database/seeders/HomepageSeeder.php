<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\SectionImage;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'identifier' => 'hero',
                'title' => null,
                'subtitle_top' => null,
                'subtitle_bottom' => null,
                'images' => ['images/slider1.png']
            ],
            [
                'identifier' => 'academics',
                'title' => 'Welcome to the Gyanoday Family',
                'subtitle_top' => 'Academics',
                'subtitle_bottom' => 'The divine destination for learners, where attaining Moksh is the ultimate goal of life.',
                'images' => []
            ],
            [
                'identifier' => 'campus',
                'title' => 'Our Campus',
                'subtitle_top' => null,
                'subtitle_bottom' => null,
                'images' => [
                    'images/campus1.jpg',
                    'images/campus2.jpg',
                    'images/campus3.jpg',
                    'images/campus4.jpg'
                ]
            ],
            [
                'identifier' => 'achievers',
                'title' => 'Navoday Achievers',
                'subtitle_top' => 'Celebrating Excellence',
                'subtitle_bottom' => '55 students selected in Navodaya vidyalaya',
                'images' => [
                    'images/students/img1.jpeg',
                    'images/students/img1.jpeg',
                    'images/students/img1.jpeg',
                    'images/students/img1.jpeg'
                ]
            ],
            [
                'identifier' => 'sports',
                'title' => 'Sport Activity',
                'subtitle_top' => 'Active Lifestyle',
                'subtitle_bottom' => 'Beyond the Classroom',
                'images' => [
                    'images/slider3.jpg',
                    'images/campus2.jpg',
                    'images/slider11.jpg'
                ]
            ]
        ];

        foreach ($sections as $secData) {
            $section = Section::firstOrCreate(
                ['identifier' => $secData['identifier']],
                [
                    'title' => $secData['title'],
                    'subtitle_top' => $secData['subtitle_top'],
                    'subtitle_bottom' => $secData['subtitle_bottom'],
                ]
            );

            // Avoid duplicating images if seeder runs multiple times
            if ($section->images()->count() === 0) {
                foreach ($secData['images'] as $index => $imgPath) {
                    SectionImage::create([
                        'section_id' => $section->id,
                        'image_path' => $imgPath,
                        'sort_order' => $index,
                        'is_active' => true,
                    ]);
                }
            }
        }
    }
}
