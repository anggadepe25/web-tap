<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akuns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('foto');
            $table->integer('nohp');
            $table->string('password');
            $table->string('branch');
            $table->enum('jk',['P','L']);
            $table->date('tgl_lahir');
            $table->string('tempat_tinggal');
            $table->string('kampus');
            $table->string('jurusan');
            $table->integer('semester');
            $table->string('hobi');
            $table->string('instagram');
            $table->integer('point');
            $table->enum('status',['0','1']);


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
        Schema::dropIfExists('akuns');
    }
}
