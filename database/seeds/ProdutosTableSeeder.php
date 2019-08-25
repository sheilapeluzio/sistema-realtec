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
            'descricao'=> 'Feijão Tropeiro, feito na india',
            'quantidade'=> '50',
        ]);

        Produto::create([
            'nome' => 'caldo de feijao',
            'descricao'=> 'Caldo de Feijão, feita na indonesia',
            'quantidade'=> '10',
        ]);
    }

}
