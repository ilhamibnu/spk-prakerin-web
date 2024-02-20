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
        Schema::table('tb_siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_absensi')->nullable()->after('name');
            $table->foreign('id_absensi')->references('id')->on('tb_absensi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_siswa', function (Blueprint $table) {
            $table->dropForeign(['id_absensi']);
            $table->dropColumn('id_absensi');
        });
    }
};
