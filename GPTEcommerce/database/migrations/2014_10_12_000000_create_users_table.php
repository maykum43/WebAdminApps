<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_tlp')->unique()->nullable();
            $table->string('norek')->unique()->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('status')->default('Aktif')->nullable();
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
