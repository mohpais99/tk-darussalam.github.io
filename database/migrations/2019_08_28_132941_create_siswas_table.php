<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
            $table->unsignedbigInteger('kelas_id');
            $table->foreign('kelas_id')
                    ->references('id')
                    ->on('kelas');
            $table->bigInteger('NIS')->unique();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('wali_murid');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('semester');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('siswas');
    }
}
