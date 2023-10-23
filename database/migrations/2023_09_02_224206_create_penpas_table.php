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
        Schema::create('penpas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('alamat',['Desa Benteng Gantarang','Desa Benteng Malewang','Desa Bonto Macinna','Desa Bonto Masila','Desa Bonto Raja','Desa Gattareng','Desa padang']);
            $table->enum('politujuan',['Poli Umum','Poli Gigi','Poli KIA']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penpas');
    }
};
