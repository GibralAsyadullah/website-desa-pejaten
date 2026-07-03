<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KknIndividualProgram extends Model
{
    use HasFactory;

    protected $table = 'kkn_individual_programs';

    protected $fillable = [
        'kkn_period_id',
        'study_program_id',
        'nama_mahasiswa',
        'judul',
        'deskripsi',
        'status',
        'urutan'
    ];

    public function kknPeriod()
    {
        return $this->belongsTo(KknPeriod::class);
    }

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

}
