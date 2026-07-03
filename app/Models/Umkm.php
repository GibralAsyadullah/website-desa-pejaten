<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Umkm extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'umkms';

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'pemilik',
        'kontak',
        'urutan'
    ];

}
