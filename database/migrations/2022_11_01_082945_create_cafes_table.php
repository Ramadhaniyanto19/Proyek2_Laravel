<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->required;
            $table->text('deskripsi')->required;
            $table->string('gambar')->required;
            $table->string('location')->required;
            $table->string('jam')->required;
            $table->string('nomor_hp')->required;
            $table->text('maps')->required;
            $table->text('iframe')->reqired;
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
        Schema::dropIfExists('cafes');
    }
}
