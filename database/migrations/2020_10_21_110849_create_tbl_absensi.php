<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_absensi', function (Blueprint $table) {
            $table -> id();
            $table -> char('token', 8);
            $table -> datetime('kd_guru_validator', 0);
            $table -> datetime('kd_siswa_validator', 0);
            $table -> integer('hadir');
            $table -> integer('izin');
            $table -> integer('tanpa_keterangan');
            $table -> integer('sakit');
            $table -> integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_absensi');
    }
}
