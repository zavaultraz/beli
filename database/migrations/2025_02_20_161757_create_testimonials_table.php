<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->nullable(); // URL atau path gambar avatar
            $table->text('content'); // Isi testimoni
            $table->string('name'); // Nama pengguna
            $table->string('occupation'); // Pekerjaan pengguna
            $table->unsignedTinyInteger('rating'); // Rating (1-5)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');

    }
};
