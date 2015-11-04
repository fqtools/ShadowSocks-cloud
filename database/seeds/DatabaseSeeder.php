<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
         DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'shinemotec@gmail.com',
            'password' => bcrypt('123456'),
        ]);    
        Model::reguard();
    }
}
