<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KknOutput extends Model
{
    use HasFactory;

    protected $table = 'kkn_outputs';

    protected $fillable = [
        'kkn_period_id',
        'icon',
        'judul',
        'deskripsi',
        'urutan'
    ];

    public function kknPeriod()
    {
        return $this->belongsTo(KknPeriod::class);
    }

}
