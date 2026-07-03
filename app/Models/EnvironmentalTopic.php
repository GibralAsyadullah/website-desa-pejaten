<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EnvironmentalTopic extends Model
{
    use HasFactory;

    protected $table = 'environmental_topics';

    protected $fillable = [
        'judul',
        'konten',
        'video_url',
        'urutan'
    ];

}
