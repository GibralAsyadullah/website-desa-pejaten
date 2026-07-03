<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EnvironmentalFaq extends Model
{
    use HasFactory;

    protected $table = 'environmental_faqs';

    protected $fillable = [
        'pertanyaan',
        'jawaban',
        'urutan'
    ];

}
