<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VillageBoundary extends Model
{
    use HasFactory;

    protected $table = 'village_boundaries';

    protected $fillable = [
        'arah',
        'keterangan'
    ];

}
