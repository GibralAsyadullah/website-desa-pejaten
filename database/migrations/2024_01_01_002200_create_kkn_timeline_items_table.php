<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kkn_timeline_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kkn_timeline_id')->constrained()->cascadeOnDelete();
            $table->string('keterangan');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kkn_timeline_items');
    }
};
