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
        Schema::table('tb_detail_mitra', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mitra')->after('id');
            $table->foreign('id_mitra')->references('id')->on('tb_mitra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_detail_mitra', function (Blueprint $table) {
            $table->dropForeign(['id_mitra']);
            $table->dropColumn('id_mitra');
        });
    }
};
