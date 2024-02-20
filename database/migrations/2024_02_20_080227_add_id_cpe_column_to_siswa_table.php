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
            $table->unsignedBigInteger('id_cpe')->nullable()->after('name');
            $table->foreign('id_cpe')->references('id')->on('tb_cpe')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_siswa', function (Blueprint $table) {
            $table->dropForeign(['id_cpe']);
            $table->dropColumn('id_cpe');
        });
    }
};
