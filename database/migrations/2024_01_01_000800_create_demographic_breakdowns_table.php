<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demographic_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('label');
            $table->decimal('persentase', 5, 2);
            $table->unsignedInteger('urutan')->default(0);
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demographic_breakdowns');
    }
};
