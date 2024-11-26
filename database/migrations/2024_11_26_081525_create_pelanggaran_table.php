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
            $table->string('angkatan');
            $table->string('prodi');
            $table->string('nim');
            $table->string('nama');
            $table->text('detail_pelanggaran');
            $table->timestamps();
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
