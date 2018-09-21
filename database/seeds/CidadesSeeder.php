<?php

use Illuminate\Database\Seeder;
use App\Cidade;

class CidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cidade = new Cidade();
        $cidade->nome = "Peruibe";
        $cidade->uf = "sp";
        $cidade->save();
    }
}
