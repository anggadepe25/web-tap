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
            $table->string('nama', 30);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('foto')->nullable();
            $table->char('nohp',13)->nullable()->unique();
            $table->string('password',191);
            $table->string('api_token', 191)->nullable()->unique();
            $table->string('branch',30);
            $table->string('jenis_kelamin',9);
            $table->date('tgl_lahir');
            $table->string('tempat_tinggal',15);
            $table->string('kampus',50);
            $table->string('jurusan',20)->nullable();
            $table->char('semester', 1)->nullable();
            $table->string('hobi',20)->nullable();
            $table->string('instagram',20)->nullable();
            $table->boolean('status')->default(false);
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
