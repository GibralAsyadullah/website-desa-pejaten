<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'galleries';

    protected $fillable = [
        'judul',
        'kategori',
        'urutan'
    ];

}
