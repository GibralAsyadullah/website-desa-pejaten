<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('village_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos', 10);
            $table->string('alamat_kantor')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->json('jam_pelayanan')->nullable();
            $table->json('sosial_media')->nullable();
            $table->text('embed_maps')->nullable();
            $table->text('sambutan_kepala_desa')->nullable();
            $table->string('luas_wilayah')->nullable();
            $table->string('ketinggian')->nullable();
            $table->string('jumlah_rw')->nullable();
            $table->string('jumlah_rt')->nullable();
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('village_profiles');
    }
};
