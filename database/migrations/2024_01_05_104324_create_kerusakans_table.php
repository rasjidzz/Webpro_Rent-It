<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemesanan_id');
            $table->foreignId('user_id');
            $table->string('deskripsi')->nullable();
            $table->string('status')->default('Waiting');
            $table->timestamps();
            // $table->string('nama_file');
            // $table->string('file_path');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerusakans');
    }
};
