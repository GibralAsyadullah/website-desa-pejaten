<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DataTransparency extends Model
{
    use HasFactory;

    protected $table = 'data_transparencies';

    protected $fillable = [
        'icon',
        'judul',
        'deskripsi',
        'link',
        'urutan'
    ];

}
