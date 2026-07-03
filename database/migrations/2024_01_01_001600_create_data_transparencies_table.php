<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_transparencies', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('link')->nullable();
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_transparencies');
    }
};
