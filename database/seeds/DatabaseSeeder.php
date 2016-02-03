<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'name' => 'Borbolato',
            'email' => 'luizborbolato@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);
    }
}
