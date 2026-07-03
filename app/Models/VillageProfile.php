<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VillageProfile extends Model
{
    use HasFactory;

    protected $table = 'village_profiles';

    protected $fillable = [
        'nama_desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'alamat_kantor',
        'telepon',
        'email',
        'jam_pelayanan',
        'sosial_media',
        'embed_maps',
        'sambutan_kepala_desa',
        'luas_wilayah',
        'ketinggian',
        'jumlah_rw',
        'jumlah_rt'
    ];

    protected $casts = [
        'jam_pelayanan' => 'array',
        'sosial_media' => 'array',
    ];

}
