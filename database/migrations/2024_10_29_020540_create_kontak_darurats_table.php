<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontakDaruratsTable extends Migration
{
    public function up()
    {
        Schema::create('KontakDarurat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->constrained('alumni')->onDelete('cascade');
            $table->string('nama_kontak', 100);
            $table->enum('hubungan', ['Orang Tua', 'Saudara', 'Teman', 'Lainnya']);
            $table->string('no_hp', 15);
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('KontakDarurat');
    }
}
