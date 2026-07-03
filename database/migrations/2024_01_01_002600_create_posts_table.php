<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kkn_period_id')->nullable()->constrained()->nullOnDelete();
            $table->string('category');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('ringkasan')->nullable();
            $table->longText('konten')->nullable();
            $table->date('tanggal_publish')->nullable();
            $table->string('status')->default('draft');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
