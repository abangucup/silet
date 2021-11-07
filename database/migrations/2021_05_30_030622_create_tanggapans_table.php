<?php

use App\Models\Permintaan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan');
            $table->Integer('pengaduan_id')->nullable();
            $table->Integer('permintaan_id')->nullable();
            // $table->foreignId('pengaduan_id')->constrained('pengaduan', 'pengaduan_id')->nullable();
            // $table->foreignId('permintaan_id')->constrained('permintaan', 'permintaan_id')->nullable();
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->unsignedBigInteger('id_petugas');

            // $table->foreignId('id_petugas')->constrained('petugas', 'id_petugas');

            $table->timestamps();

            // $table->foreignId('permintaan_id')->references('permintaan_id')->on('permintaan');
            // $table->foreign('pengaduan_id')->references('pengaduan_id')->on('pengaduan');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan');
    }
}
