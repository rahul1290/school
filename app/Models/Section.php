<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['identifier', 'title', 'subtitle_top', 'subtitle_bottom', 'title_font', 'title_color', 'subtitle_color'];

    public function images()
    {
        return $this->hasMany(SectionImage::class)->orderBy('sort_order');
    }
}
