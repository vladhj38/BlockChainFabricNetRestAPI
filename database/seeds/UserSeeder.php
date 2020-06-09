<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => 'admin', 'email' => 'guruilya86@gmail.com', 'password' => bcrypt('admin123'), 'is_enabled' => true]);
        User::create(['name' => 'user01', 'email' => 'fwd2018man@mail.ru', 'password' => bcrypt('user01123'), 'is_enabled' => true]);
        User::create(['name' => 'user02', 'email' => 'user02@gmail.com', 'password' => bcrypt('user02123'), 'is_enabled' => true]);
    }
}
