<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pelanggaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign Key ke tabel users
            $table->unsignedBigInteger('list_pelanggaran_id'); // Foreign Key ke tabel list_pelanggaran
            $table->enum('status', ['Belum Diperiksa', 'Diperiksa', 'Selesai'])->default('Belum Diperiksa');
            $table->timestamps();

            // Menambahkan foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('list_pelanggaran_id')->references('id')->on('list_pelanggaran')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggaran');
    }
};

