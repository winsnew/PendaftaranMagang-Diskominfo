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
        Schema::create('pengumuman', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');
            $table->integer('bulan');
            $table->text('keterangan tempat');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('datamahasiswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
