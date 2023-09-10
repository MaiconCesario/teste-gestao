<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Vendedor;
class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vendas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendedores = Vendedor::all();
        return view('vendas.nova_venda',['vendedores' => $vendedores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $venda = new Venda; // Renomeie a variável
        $venda->vendedor_id = $request->input('id'); 
        $venda->valor_total = $request->input('valor_total'); 
        $venda->data_venda = $request->input('data_venda');
        $venda->comissao = $venda->valor_total * 0.085;
        $venda->save();
        //dd($request->all());
        $request->session()->flash('success', 'Venda cadastrada com sucesso.');
        

        return view('vendas.nova_venda', ['vendedores' => Vendedor::all(), 'request' => $request]);
    
       

   

    }

    /**
     * Display the specified resource.
     */
    public function show(Venda $venda, Vendedor $vendedor)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venda $venda)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
