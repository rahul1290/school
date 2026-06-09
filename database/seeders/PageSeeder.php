<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Page::firstOrCreate(
            ['slug' => 'about-us'],
            [
                'title' => 'About Gyanoday Vidya Niketan Deorbija',
                'content' => '<h2>Our History</h2><p>Gyanoday Vidya Niketan was established with the vision of providing holistic education deeply rooted in traditional values and modern excellence.</p><br><h2>Our Mission</h2><p>The divine destination for learners, where attaining Moksh is the ultimate goal of life. We focus on character building, moral values, and academic excellence.</p>',
            ]
        );

        \App\Models\Page::firstOrCreate(
            ['slug' => 'contact'],
            [
                'title' => 'Contact Us',
                'content' => '<section class="bg-gradient-to-br from-slate-100 to-blue-50 py-8 px-4 md:px-6">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-3xl shadow-[0_15px_40px_rgba(0,0,0,0.08)] overflow-hidden border border-slate-100">
            <!-- Address -->
            <div class="grid grid-cols-[90px_1fr] md:grid-cols-[110px_1fr] gap-6 items-center p-6 md:p-8">
                <div class="flex justify-center">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-blue-50 rounded-2xl flex items-center justify-center shadow-sm">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-white rounded-full flex items-center justify-center shadow text-2xl md:text-3xl">
                            📍
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-blue-900">
                        Address
                    </h3>
                    <div class="w-20 h-1 bg-blue-500 rounded-full my-3"></div>
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        Gyanoday Vidya Niketan<br>
                        School Lane, Education City<br>
                        State, PIN - 123456
                    </p>
                </div>
            </div>

            <div class="mx-6 md:mx-8 border-t border-gray-100"></div>

            <!-- Phone -->
            <div class="grid grid-cols-[90px_1fr] md:grid-cols-[110px_1fr] gap-6 items-center p-6 md:p-8">
                <div class="flex justify-center">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-green-50 rounded-2xl flex items-center justify-center shadow-sm">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-white rounded-full flex items-center justify-center shadow text-2xl md:text-3xl">
                            📞
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-blue-900">
                        Phone
                    </h3>
                    <div class="w-20 h-1 bg-green-500 rounded-full my-3"></div>
                    <a href="tel:+919876543210"
                       class="text-base md:text-lg text-gray-700 hover:text-blue-700 transition">
                        +91 98765 43210
                    </a>
                </div>
            </div>

            <div class="mx-6 md:mx-8 border-t border-gray-100"></div>

            <!-- Email -->
            <div class="grid grid-cols-[90px_1fr] md:grid-cols-[110px_1fr] gap-6 items-center p-6 md:p-8">
                <div class="flex justify-center">
                    <div class="w-20 h-20 md:w-24 md:h-24 bg-amber-50 rounded-2xl flex items-center justify-center shadow-sm">
                        <div class="w-14 h-14 md:w-16 md:h-16 bg-white rounded-full flex items-center justify-center shadow text-2xl md:text-3xl">
                            ✉️
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-blue-900">
                        Email
                    </h3>
                    <div class="w-20 h-1 bg-amber-500 rounded-full my-3"></div>
                    <a href="mailto:info@gyanodayvidyaniketan.edu.in"
                       class="text-base md:text-lg text-gray-700 hover:text-blue-700 transition break-all">
                        info@gyanodayvidyaniketan.edu.in
                    </a>
                </div>
            </div>

            <!-- Bottom Curve -->
            <div class="relative mt-4">
                <div class="h-20 bg-blue-900 rounded-t-[0px]"></div>
                <!-- Logo Circle -->
                <div class="absolute left-1/2 -top-6 -translate-x-1/2">
                    <div class="w-16 h-16 rounded-full bg-blue-900 border-4 border-white flex items-center justify-center shadow-xl overflow-hidden">
                        <img src="/images/logo.png" class="w-10 h-10 object-contain" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>',
                'map_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14686.792111586596!2d77.389849!3d23.034994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1716641234567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ]
        );

        \App\Models\Page::firstOrCreate(
            ['slug' => 'our-history'],
            [
                'title' => 'Our History',
                'content' => '<div class="space-y-6 text-slate-700 leading-relaxed"><p class="text-lg font-light text-slate-500">Established with a vision to revolutionize primary and secondary education in Deorbija, Gyanoday Vidya Niketan has grown from humble beginnings into a leading center of academic excellence and character formation.</p><h2>Foundation and Early Years</h2><p>Gyanoday Vidya Niketan was founded with a clear objective: to provide high-quality education to children in the region, combining modern science and technologies with deep-rooted traditional and moral values. Over the years, the institution has successfully bridged the gap between academic brilliance and ethical upbringing.</p><h2>Milestones of Success</h2><p>From producing board toppers to achieving outstanding success in competitive entrance examinations like the Navodaya Vidyalaya selection (where more than 55 students have secured admission), the school’s journey has been marked by continuous improvement and dedication of both our teachers and students.</p></div>',
            ]
        );

        \App\Models\Page::firstOrCreate(
            ['slug' => 'campus'],
            [
                'title' => 'Our Campus & Infrastructure',
                'content' => '<div class="space-y-6 text-slate-700 leading-relaxed"><p class="text-lg font-light text-slate-500">Gyanoday Vidya Niketan boasts a spacious, green, and modern campus designed to cultivate curiosity, physical fitness, and a love for learning.</p><h2>Smart Classrooms</h2><p>Our classrooms are well-ventilated, spacious, and equipped with modern teaching aids to make learning an interactive and engaging experience.</p><h2>Science and Computer Labs</h2><p>To foster analytical and practical skills, the campus features fully-equipped physics, chemistry, biology, and computer laboratories where students can experiment and experience concepts firsthand.</p><h2>Library and Sports Facilities</h2><p>Our library houses thousands of books ranging from academic guides to classical literature. In addition, our sports infrastructure supports athletics, football, cricket, volleyball, and traditional games, encouraging a healthy and active lifestyle.</p></div>',
            ]
        );

        \App\Models\Page::firstOrCreate(
            ['slug' => 'achievements'],
            [
                'title' => 'Academic & Co-curricular Achievements',
                'content' => '<div class="space-y-6 text-slate-700 leading-relaxed"><p class="text-lg font-light text-slate-500">Excellence is not just an act, but a habit at Gyanoday Vidya Niketan. We celebrate the achievements of our outstanding students who continue to shine in multiple fields.</p><h2>Navodaya Vidyalaya Selections</h2><p>A shining testament to our rigorous academic training: over 55 of our brilliant students have successfully cleared the prestigious Navodaya entrance examinations and secured admissions, marking one of the highest success rates in the district.</p><h2>Higher Studies & Alumni Success</h2><p>Our alumni continue to make us proud by qualifying for premier institutions across the country, including medical (MBBS) and engineering fields, demonstrating their capability to lead and excel globally.</p><h2>Co-curricular Laurels</h2><p>Gyanoday students regularly participate and win awards in state-level sports competitions, science exhibitions, debate tournaments, and cultural art events.</p></div>',
            ]
        );

        \App\Models\Page::firstOrCreate(
            ['slug' => 'rules-and-regulations'],
            [
                'title' => 'Rules & Regulations',
                'content' => '<div class="space-y-6 text-slate-700 leading-relaxed"><p class="text-lg font-light text-slate-500">To maintain a disciplined, safe, and productive educational environment, Gyanoday Vidya Niketan expects all students and parents to adhere strictly to the school code of conduct.</p><h2>General Discipline & Attendance</h2><p>Regularity and punctuality are paramount. Students must achieve a minimum of 75% attendance to qualify for annual examinations. Absence without prior written permission from the class teacher or principal is strictly prohibited.</p><h2>Dress Code & Behavior</h2><p>Students must attend school in clean, complete, and correct uniforms on all working days. Respectful behavior towards teachers, school staff, and fellow peers is expected at all times. Indiscipline or damage to school property will result in strict disciplinary action.</p><h2>Fee Submission Guidelines</h2><p>All school fees must be submitted on time as per the fee structure calendar. Late payments may attract a fine or administrative restrictions.</p></div>',
            ]
        );
    }
}
