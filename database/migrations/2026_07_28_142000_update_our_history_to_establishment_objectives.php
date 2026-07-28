<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOurHistoryToEstablishmentObjectives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 1. Rename the slug and title of 'our-history' to 'establishment-objecties'
        $ourHistoryPage = \App\Models\Page::where('slug', 'our-history')->first();
        if ($ourHistoryPage) {
            $ourHistoryPage->slug = 'establishment-objecties';
            $ourHistoryPage->title = 'Establishment & Objectives';
            $ourHistoryPage->save();
        }

        // 2. Update references in the 'about-us' page content
        $aboutUsPage = \App\Models\Page::where('slug', 'about-us')->first();
        if ($aboutUsPage) {
            $content = $aboutUsPage->content;
            $content = str_replace('/school/aboutus/our-history', '/school/aboutus/establishment-objecties', $content);
            $content = str_replace('Our History', 'Establishment & Objectives', $content);
            $aboutUsPage->content = $content;
            $aboutUsPage->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $page = \App\Models\Page::where('slug', 'establishment-objecties')->first();
        if ($page) {
            $page->slug = 'our-history';
            $page->title = 'Our History';
            $page->save();
        }

        $aboutUsPage = \App\Models\Page::where('slug', 'about-us')->first();
        if ($aboutUsPage) {
            $content = $aboutUsPage->content;
            $content = str_replace('/school/aboutus/establishment-objecties', '/school/aboutus/our-history', $content);
            $content = str_replace('Establishment & Objectives', 'Our History', $content);
            $aboutUsPage->content = $content;
            $aboutUsPage->save();
        }
    }
}
