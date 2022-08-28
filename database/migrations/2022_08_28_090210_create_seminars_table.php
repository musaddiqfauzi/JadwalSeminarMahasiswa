<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nim');
            $table->string('bidang');
            $table->string('dosen_wali');
            $table->string('dosen_pembimbing_1');
            $table->string('dosen_pembimbing_2');
            $table->string('dosen_penguji_1');
            $table->string('dosen_penguji_2');
            $table->string('borang_ta_1');
            $table->string('file_borang_ta_1');
            $table->string('transkrip_online');
            $table->string('file_transkrip_online');
            $table->string('proposan_ta');
            $table->string('file_proposan_ta');
            $table->string('lembaran_plagiasi');
            $table->string('file_lembaran_plagiasi');
            $table->string('slide_presentasi');
            $table->string('file_slide_presentasi');
            $table->string('bukti_persetujuan');
            $table->string('file_bukti_persetujuan');
            $table->string('keterangan');
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
        Schema::dropIfExists('seminars');
    }
}
