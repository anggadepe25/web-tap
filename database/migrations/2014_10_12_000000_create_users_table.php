<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('foto')->nullable();
            $table->string('nohp',13)->nullable()->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('api_token', 80)->nullable()->unique();
            $table->string('branch');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->string('tempat_tinggal');
            $table->string('kampus');
            $table->string('jurusan')->nullable();
            $table->integer('semester')->nullable();
            $table->string('hobi')->nullable();
            $table->string('instagram')->nullable();
            $table->enum('status',['0','1'])->default('0');
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
        Schema::dropIfExists('users');
    }
}
