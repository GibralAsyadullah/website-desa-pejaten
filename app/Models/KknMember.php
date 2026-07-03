<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class KknMember extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'kkn_members';

    protected $fillable = [
        'kkn_period_id',
        'nama',
        'peran',
        'prodi',
        'urutan'
    ];

    public function kknPeriod()
    {
        return $this->belongsTo(KknPeriod::class);
    }

}
