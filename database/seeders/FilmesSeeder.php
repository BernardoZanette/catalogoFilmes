<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert([
            [
                'nome' => 'nomeTeste',
                'sinopse' => 'sinopseTeste',
                'ano' => 'anoTeste',
                'categoria' => 'categoriaTeste',
                'capa' => 'capaTeste',
                'trailer' => 'teste.com'
            ]
        ]);
    }
}
