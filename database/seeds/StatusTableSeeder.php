<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'nome' => 'Cadastrado'
        ]);
        DB::table('statuses')->insert([
            'nome' => 'Ativo'
        ]);
    }
}
