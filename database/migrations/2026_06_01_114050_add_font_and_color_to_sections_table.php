<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFontAndColorToSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->string('title_font')->nullable()->after('title');
            $table->string('title_color')->nullable()->after('title_font');
            $table->string('subtitle_color')->nullable()->after('subtitle_bottom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropColumn(['title_font', 'title_color', 'subtitle_color']);
        });
    }
}
