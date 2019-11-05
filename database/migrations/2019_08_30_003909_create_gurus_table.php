<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id')->onDelete('cascade');
            $table->unsignedbigInteger('user_id')->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')->onDelete('cascade');
            $table->unsignedbigInteger('kelas_id')->onDelete('cascade')->nullable();
            $table->foreign('kelas_id')
                    ->references('id')
                    ->on('kelas')->onDelete('cascade')->nullable();
            $table->bigInteger('NUPTK')->unique();
            $table->string('name');
            $table->string('no_telp');
            $table->string('email');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('alamat');
            $table->string('foto')->nullable();
            $table->String('jabatan')->nullable();
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
        Schema::dropIfExists('gurus');
    }
}
