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
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kerusakan_id')->nullable();
            $table->unsignedBigInteger('solusi_id')->nullable();
            $table->foreign('kerusakan_id')->references('id')->on('kerusakan')->onDelete('set null');
            $table->foreign('solusi_id')->references('id')->on('solusi')->onDelete('set null');
            $table->float("bobot");
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
        Schema::dropIfExists('rules');
    }
};
