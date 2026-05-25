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
                'content' => '<h3>Address</h3><p>Gyanoday Vidya Niketan<br>School Lane, Education City<br>State, PIN - 123456</p><br><h3>Phone</h3><p>+91 98765 43210</p><br><h3>Email</h3><p>info@gyanodayvidyaniketan.edu.in</p>',
                'map_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14686.792111586596!2d77.389849!3d23.034994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1716641234567!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ]
        );
    }
}
