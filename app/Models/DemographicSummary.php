<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DemographicSummary extends Model
{
    use HasFactory;

    protected $table = 'demographic_summaries';

    protected $fillable = [
        'tahun',
        'total_penduduk',
        'laki_laki',
        'perempuan',
        'kepala_keluarga'
    ];

}
