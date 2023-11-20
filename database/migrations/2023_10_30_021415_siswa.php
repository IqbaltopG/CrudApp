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
        Schema::create('siswa_models', function (Blueprint $table) {
            $table->id();
            $table->string('NIK',12);
            $table->string('nama',20);
            $table->string('alamat',60);
            $table->string('kelurahan',20);
            $table->string('kecamatan',20);
            $table->string('kota',40);
            $table->string('provinsi',30);
            $table->date('dob',30);
            // $table->integer('umur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
