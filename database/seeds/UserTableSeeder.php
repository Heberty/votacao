<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Administrador',
            'email'    => 'contato@mixinternet.com.br',
            'type'     => 'admin',
            'password' => bcrypt('1q2w3e4r')
        ]);
    }
}
