<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peserta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_pendaftaran');
			
			$table->string('email'); 
			$table->string('password');  

			$table->string('nama_lengkap');
			$table->string('tempat_lahir');
			$table->date('tanggal_lahir');

			$table->string('nama_panggilan');
			$table->tinyInteger('jenis_kelamin');
			$table->string('alamat_tinggal'); 
			$table->string('kota_tinggal'); 
			$table->integer('no_handphone'); 
			$table->string('pekerjaan'); 
			$table->string('kegiatan_gereja'); 
			$table->string('hobi_bakat'); 
			$table->string('dekanat'); 
			$table->string('paroki');  

			$table->tinyInteger('birdtype');
			$table->boolean('status_aktivasi');
			$table->boolean('status_peserta');
			$table->boolean('status_bayar');
			$table->boolean('kesediaan_informasi');
			$table->integer('days_count');

			$table->dateTime('created_at');
			$table->dateTime('updated_at');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('peserta');
	}

}
