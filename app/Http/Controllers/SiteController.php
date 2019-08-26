<?php

namespace App\Http\Controllers;

use App\InsumoProduto;
use App\Insumo;
use App\Produto;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function insumo()
    {
        return view('insumo');
    }

    public function add_insumo()
    {
        return view('add_insumo');
    } 

    public function visualizar_produto($id)
    {
        //Fazer uma consulta com todos os dados do produto aqui tratado
        //Se a ID eh 1 entao eu tenho que passar para view todos os dados
        //do produto 1 + os seus insumos com quantidade e PREÇO total do produto
        //https://laravel.com/docs/5.8/queries


        $produtos = DB::table('produtos')
            ->join('insumo_produto', 'produtos.id', '=', 'insumo_produto.produto_id')
            ->join('insumos', 'insumo_produto.insumo_id', '=', 'insumos.id')
            ->select('produtos.*', 'insumo_produto.*', 'insumos.*')
            ->where('produtos.id', '=', $id)
            ->get();

        $precoTotal = 0;

        foreach ($produtos as $produto) {
            $precoTotal = $precoTotal + ($produto->quantidade * $produto->preco);
        }

        return view('visualizar_produto',compact('produtos','precoTotal'));
    }

    public function add_produto()
    {
        //$retorno = $this->Insumo->lists('nome', 'id','unidade_medida');
        $insumos = Insumo::all();
       // echo $retorno;
        return view('add_produto', compact('insumos'));
    } 

    public function post_insumo(Request $request)
    {
        $nome = $request->input('nome');
        $unidade_medida = $request->input('unidade_medida');
        $data_validade = $request->input('data_validade');
        $preco = $request->input('preco');



        Insumo::create([
            'nome' => $nome,
            'unidade_medida'=> $unidade_medida,
            'prazo_validade'=> $data_validade,
            'preco'=> $preco,
        ]);
        
        return view('insumo');

    }

    public function post_produto(Request $request)
    {
        $codigo_barra = $request->input('codigo_barra');
        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
        $insumo = $request->input('insumo');
        $quantidade = $request->input('quantidade');

        if($codigo_barra == '' || $nome == ''
         || $descricao == '' || $insumo == '' || $quantidade == '')
            return $this->add_produto();

        $produto = Produto::create([
            'codigo_barra'=> $codigo_barra,
            'nome' => $nome,
            'descricao'=> $descricao,
        ]);

        InsumoProduto::create([
            'insumo_id'=> $insumo,
            'produto_id'=> $produto->id,
            'quantidade'=> $quantidade,
            

        ]);

        return view('produto');
    }

    public function produto()
    {
        return view('produto');
    }

    public function insumo_datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Insumo::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Excluir</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('insumos');
    }


    public function produto_datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Produto::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="visualizar_produto/'.$row->id.'" class="edit btn btn-primary btn-sm">Visualizar</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('produtos');
    }
}
