<?php

class SeederTabelPengguna extends Seeder
{

	public function run()
	{
		DB::table('pengguna')->delete();

		$tampungan = (array(
				'id' => '1',
				'nama_tampilan'	=> 'Noviyanto Rachmady',
				'username'	=> 'novay',
				'password'	=> Hash::make('admins'),
				'email'	=> 'novay@otaku.si',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));

		DB::table('pengguna')->insert($tampungan);
	}

}