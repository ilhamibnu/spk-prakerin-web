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
        Schema::table('tb_detail_siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_siswa')->after('id');
            $table->foreign('id_siswa')->references('id')->on('tb_siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_detail_siswa', function (Blueprint $table) {
            $table->dropForeign(['id_siswa']);
            $table->dropColumn('id_siswa');
        });
    }
};
