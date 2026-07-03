<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Official extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'officials';

    protected $fillable = [
        'nama',
        'jabatan',
        'periode_mulai',
        'periode_selesai',
        'urutan'
    ];

}
