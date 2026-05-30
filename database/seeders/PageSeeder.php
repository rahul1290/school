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
        \App\Models\Page::updateOrCreate(
            ['slug' => 'about-us'],
            [
                'title' => 'About Gyanoday Vidya Niketan',
                'content' => '<h2>Our History</h2><p>Gyanoday Vidya Niketan was established with the vision of providing holistic education deeply rooted in traditional values and modern excellence.</p><br><h2>Our Mission</h2><p>The divine destination for learners, where attaining Moksh is the ultimate goal of life. We focus on character building, moral values, and academic excellence.</p>',
            ]
        );

        \App\Models\Page::updateOrCreate(
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
    }
}
