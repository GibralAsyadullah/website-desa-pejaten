<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kkn_outputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kkn_period_id')->nullable()->constrained()->nullOnDelete();
            $table->string('icon')->nullable();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kkn_outputs');
    }
};
