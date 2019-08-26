<?php

use Illuminate\Database\Seeder;
use App\Produto;
class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'feijao tropeiro',
            'cogigo_barra'=> '5050',
            'descricao'=> 'Feijão Tropeiro, feito na india',
            
        ]);

        Produto::create([
            'nome' => 'caldo de feijao',
            'descricao'=> 'Caldo de Feijão, feita na indonesia',
            'cogigo_barra'=> '5050',
        ]);
    }

}
