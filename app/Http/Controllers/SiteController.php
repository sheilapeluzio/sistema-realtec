<?php

namespace App\Http\Controllers;

use App\Insumo;
use App\Produto;
use Illuminate\Http\Request;
use DataTables;

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
    public function add_produto()
    {
        return view('add_produto');
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
        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
       

        Produto::create([
            'nome' => $nome,
            'descricao'=> $descricao,
           
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
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
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
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('produtos');
    }
}
