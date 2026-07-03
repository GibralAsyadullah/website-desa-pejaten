<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DemographicBreakdown extends Model
{
    use HasFactory;

    protected $table = 'demographic_breakdowns';

    protected $fillable = [
        'kategori',
        'label',
        'persentase',
        'urutan'
    ];

}
