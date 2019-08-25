<?php

use Illuminate\Database\Seeder;
use App\Insumo;

class InsumosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Insumo::create([
            'nome' => 'feijao',
            'unidade_medida'=> 'saca',
            'prazo_validade'=> '2020-01-22',
            'preco'=> '5',
        ]);

        Insumo::create([
            'nome' => 'farofa',
            'unidade_medida'=> 'kg',
            'prazo_validade'=> '2020-01-15',
            'preco'=> '5',
        ]);

    }
}
