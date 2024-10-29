<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanTable extends Migration
{
    public function up()
    {
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->constrained('alumni')->onDelete('cascade');
            $table->string('nama_perusahaan', 150);
            $table->string('posisi', 100)->nullable();
            $table->string('bidang_perusahaan', 100)->nullable();
            $table->text('alamat_perusahaan')->nullable();
            $table->year('tahun_masuk');
            $table->year('tahun_keluar')->nullable();  // null jika masih bekerja
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pekerjaan');
    }
}
