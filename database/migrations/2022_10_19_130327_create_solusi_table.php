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
        Schema::create('solusi', function (Blueprint $table) {
            $table->id();
            $table->string("kode_solusi", 10)->required();
            $table->string("nama_solusi", 50)->required();
            $table->string("deskripsi_solusi", 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solusi');
    }
};
