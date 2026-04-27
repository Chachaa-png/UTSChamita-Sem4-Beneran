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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); //disini ngga ada nullable, berarti saat isi data tidak boleh kosong
            $table->string('NIM')->unique(); //unique berarti tidak boleh ada data yang sama, misal ada data yang namanya abc, berarti data selanjutnya gaboleh abc
            $table->string('tempat_lahir')->nullable(); //nullable berarti saat isi data boleh kosong
            $table->string('tanggal_lahir')->nullable();
            $table->text('alamat');
            $table->string('asal')->nullable();
            $table->string('id_jurusan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
