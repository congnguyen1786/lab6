<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            ['name' => 'Vui Từng Phút Giây', 'email' => 'vuiqua@gmail.com', 'password' => bcrypt('hehe'), 'idgroup' => 1, 'diachi' => 'TPHCM'],
            ['name' => 'Buồn Từng Phút Giây', 'email' => 'buonqua@gmail.com', 'password' => bcrypt('huhu'), 'idgroup' => 1, 'diachi' => 'TPHCM'],
            ['name' => 'Nguyen Thi Gia Hu', 'email' => 'giahu@gmail.com', 'password' => bcrypt('hihi'), 'idgroup' => 0, 'diachi' => 'HN'],
        ]);
    }
    
}
