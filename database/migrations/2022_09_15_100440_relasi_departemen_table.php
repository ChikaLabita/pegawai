<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiDepartemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pegawai', function(Blueprint $table) {
            $table->dropColumn('jabatan'); //Menghapus kolom kelas
            $table->unsignedBigInteger('id_departemen')->nullable(); //Menambahkan kolom kelas_id
            $table->foreign('id_departemen')->references('id')->on('departemen'); //Menambahkan foreign key di kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pegawai', function(Blueprint $table){
            $table->string('departemen');
            $table->dropForeign(['id_departemen']);
        });
    }
}
