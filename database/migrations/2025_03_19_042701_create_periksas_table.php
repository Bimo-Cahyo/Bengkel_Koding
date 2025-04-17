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
<<<<<<< HEAD
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
=======
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_pasien')->constrained('pasiens')->on('users')->onDelete('cascade');
            $table->foreignId('id_dokter')->constrained('dokters')->on('users')->onDelete('cascade');
            $table->timestamp('tgl_periksa')->nullable();
            $table->string('catatan')->nullable()->max(255);
            $table->integer('biaya_periksa')->nullable();
>>>>>>> f66d16a (coba)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
=======
        Schema::dropIfExists('periksas');
>>>>>>> f66d16a (coba)
    }
};
