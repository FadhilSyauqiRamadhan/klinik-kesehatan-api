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
        Schema::create('kliniks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klinik');
            $table->text('alamat_lengkap');
            $table->string('nomor_telepon');
            $table->enum('jenis_klinik', ['Umum', 'Spesialis']);
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kliniks');
    }
};
