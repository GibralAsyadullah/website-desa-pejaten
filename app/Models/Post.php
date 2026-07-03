<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'posts';

    protected $fillable = [
        'kkn_period_id',
        'category',
        'judul',
        'slug',
        'ringkasan',
        'konten',
        'tanggal_publish',
        'status',
    ];

    protected $casts = [
        'tanggal_publish' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (self $model) {
            if (empty($model->slug) && ! empty($model->judul)) {
                $model->slug = static::generateUniqueSlug($model->judul);
            }
        });

        static::updating(function (self $model) {
            if (empty($model->slug) && ! empty($model->judul)) {
                $model->slug = static::generateUniqueSlug($model->judul, $model->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $source, $ignoreId = null): string
    {
        $base = Str::slug($source);
        $slug = $base;
        $i = 1;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base.'-'.$i++;
        }

        return $slug;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function kknPeriod()
    {
        return $this->belongsTo(KknPeriod::class);
    }

    public function scopeTerbit($query)
    {
        return $query->where('status', 'terbit');
    }

    public function scopeKategori($query, $category)
    {
        return $category && $category !== 'all'
            ? $query->where('category', $category)
            : $query;
    }
}
