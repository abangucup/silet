<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id('permintaan_id');
            $table->dateTime('tgl_permintaan');
            $table->char('nik', 16);
            $table->string('judul_permintaan');
            $table->text('isi_permintaan');
            $table->string('alamat');
            $table->string('foto');
            $table->enum('status', ['0','proses', 'selesai']);

            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('masyarakat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan');
    }
}
