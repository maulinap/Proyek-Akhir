<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    		{
       			 //
        			DB::table('siswa')->insert([
            				'nama' => 'Rika Ayu',
            				'nis' => 101,
            				'tgl_lahir' => '2003-12-12'
        			]);
        			DB::table('siswa')->insert([
           			 'nama' => 'Dewi Kurnia',
            			'nis' => 102,
            			'tgl_lahir' => '2003-01-19'
        			]);
                    DB::table('siswa')->insert([
           			 'nama' => 'Sinta Merli',
            			'nis' => 103,
            			'tgl_lahir' => '2002-05-10'
        			]);
    		}
}
