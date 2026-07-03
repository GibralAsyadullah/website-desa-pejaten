<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KknPeriod extends Model
{
    use HasFactory;

    protected $table = 'kkn_periods';

    protected $fillable = [
        'nama',
        'slug',
        'tahun',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'jumlah_mahasiswa',
        'jumlah_prodi',
        'jumlah_minggu',
        'is_active',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (self $model) {
            if (empty($model->slug) && ! empty($model->nama)) {
                $model->slug = static::generateUniqueSlug($model->nama);
            }
        });

        static::updating(function (self $model) {
            if (empty($model->slug) && ! empty($model->nama)) {
                $model->slug = static::generateUniqueSlug($model->nama, $model->id);
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

    public function members()
    {
        return $this->hasMany(KknMember::class);
    }

    public function timelines()
    {
        return $this->hasMany(KknTimeline::class)->orderBy('urutan');
    }

    public function individualPrograms()
    {
        return $this->hasMany(KknIndividualProgram::class);
    }

    public function outputs()
    {
        return $this->hasMany(KknOutput::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
