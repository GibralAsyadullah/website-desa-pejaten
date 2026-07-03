<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('village_boundaries', function (Blueprint $table) {
            $table->id();
            $table->string('arah');
            $table->string('keterangan');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('village_boundaries');
    }
};
