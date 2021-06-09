<?php

use Illuminate\Database\Seeder;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            'title'    => 'Opção 01',
            'active'   => 1,
        ]);

        DB::table('votes')->insert([
            'title'    => 'Opção 02',
            'active'   => 1,
        ]);
    }
}
