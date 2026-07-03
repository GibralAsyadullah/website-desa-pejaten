<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VillagePotential extends Model
{
    use HasFactory;

    protected $table = 'village_potentials';

    protected $fillable = [
        'icon',
        'judul',
        'deskripsi',
        'urutan'
    ];

}
