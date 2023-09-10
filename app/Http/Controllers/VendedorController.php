<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;
use App\Models\Venda;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $lista_vendedores = Vendedor::get()->all();
        return view('vendedores.index', ['lista_vendedores' => $lista_vendedores, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {      
        return view('vendedores.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->session()->flash('success', 'Usuário cadastrado com sucesso.');

        $regras = [
            'nome' => 'required|min:3|max:40',
            'email' => 'required|min:3|max:200',
            'senha' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'email.min' => 'O campo email deve ter no mínimo 3 caracteres',
            'email.max' => 'O campo email deve ter no maimo 200 caracteres'
        ];

        $request->validate($regras, $feedback);


        $cadastro = new Vendedor;
        $cadastro->nome_vendedor = $request->input('nome'); 
        $cadastro->email = $request->input('email'); 
        $cadastro->senha = $request->input('senha'); 
        $cadastro->save();
        return view('vendedores.cadastro');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venda $venda, Vendedor $vendedor)
    {
        $vendas = Venda::where('vendedor_id', $vendedor->id)->get();
        return view('vendas.vendas_realizadas',['vendedor' => $vendedor, 'vendas' => $vendas]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendedor $vendedor)
    {
        return view('vendedores.editar',['vendedor' => $vendedor]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendedor $vendedor)
    {
        $request->all();
        $vendedor->update($request->all());
        return redirect()->route('vendedor.index',['vendedor' => $vendedor]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendedor $vendedor, Request $request)
    {
        
    if ($vendedor->venda->count() > 0) {
        return redirect()->route('vendedor.index')->with('warning', 'Este vendedor possui vendas associadas e não pode ser excluído.');
    }
   
    $vendedor->delete();
    return redirect()->route('vendedor.index')->with('success', 'Vendedor excluído com sucesso.');

    }
}
