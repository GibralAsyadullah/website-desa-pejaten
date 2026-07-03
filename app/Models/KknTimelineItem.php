<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KknTimelineItem extends Model
{
    use HasFactory;

    protected $table = 'kkn_timeline_items';

    protected $fillable = [
        'kkn_timeline_id',
        'keterangan'
    ];

    public function timeline()
    {
        return $this->belongsTo(KknTimeline::class, 'kkn_timeline_id');
    }

}
