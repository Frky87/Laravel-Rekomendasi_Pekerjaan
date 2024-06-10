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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id_employees');
            $table->string('gambar',50);
            $table->string('nama_lengkap',150);
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->string('alamat',200);
            $table->string('pendidikan_terakhir',150);
            $table->string('keahlian',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
