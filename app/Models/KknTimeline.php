<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KknTimeline extends Model
{
    use HasFactory;

    protected $table = 'kkn_timelines';

    protected $fillable = [
        'kkn_period_id',
        'label',
        'judul',
        'status',
        'urutan'
    ];

    public function kknPeriod()
    {
        return $this->belongsTo(KknPeriod::class);
    }

    public function items()
    {
        return $this->hasMany(KknTimelineItem::class);
    }

}
