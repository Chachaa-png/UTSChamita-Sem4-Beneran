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
         Schema::create('jurusan' /**ini isi sesuai nama file, klo nama file dosen berarti 'dosen' */, function (Blueprint $table) {
            $table->id();
            $table->string('jurusan'); //disini ngga ada nullable, berarti saat isi data tidak boleh kosong
            $table->string('kode jurusan')->unique(); //unique berarti tidak boleh ada data yang sama, misal ada data yang namanya abc, berarti data selanjutnya gaboleh abc
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
