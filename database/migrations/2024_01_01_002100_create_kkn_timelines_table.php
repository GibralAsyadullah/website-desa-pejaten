<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kkn_timelines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kkn_period_id')->constrained()->cascadeOnDelete();
            $table->string('label');
            $table->string('judul');
            $table->string('status')->default('berjalan');
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kkn_timelines');
    }
};
