<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kkn_individual_programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kkn_period_id')->constrained()->cascadeOnDelete();
            $table->foreignId('study_program_id')->constrained()->cascadeOnDelete();
            $table->string('nama_mahasiswa');
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('status')->default('berjalan');
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kkn_individual_programs');
    }
};
