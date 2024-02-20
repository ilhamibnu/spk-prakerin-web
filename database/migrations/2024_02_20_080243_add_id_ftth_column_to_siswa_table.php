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
            $table->unsignedBigInteger('id_ftth')->nullable()->after('name');
            $table->foreign('id_ftth')->references('id')->on('tb_ftth')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_siswa', function (Blueprint $table) {
            $table->dropForeign(['id_ftth']);
            $table->dropColumn('id_ftth');
        });
    }
};
