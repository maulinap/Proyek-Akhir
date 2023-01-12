<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    		{
        			//
        			DB::table('users')->insert([
           				'name' => 'Siti Zubaeda',
            				'role' => 'admin',
            				'email' => 'admin@gmail.com',
            				'password' => bcrypt('password123')
        			]);
        			DB::table('users')->insert([
            				'name' => 'Rika Ayu',
            				'role' => 'siswa',
            				'siswa_id' => 1,
            				'email' => 'rika@gmail.com',
            				'password' => bcrypt('password123')
        			]);
        			DB::table('users')->insert([
            				'name' => 'Dewi Kurnia',
            				'role' => 'siswa',
            				'siswa_id' => 2,
            				'email' => 'dewi@gmail.com',
           				 'password' => bcrypt('password123')
        			]);
                    DB::table('users')->insert([
                        'name' => 'Sinta Merli',
                        'role' => 'siswa',
                        'siswa_id' => 3,
                        'email' => 'sinta@gmail.com',
                        'password' => bcrypt('password123')
                ]);
    		}
}
