@extends('layouts.basico')

@section('titulo', 'Vendas Realizadas')

@section('conteudo')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">Email</th>
    <th scope="col">Senha</th>  
    </tr>
</thead>

<tbody>
        <tr>
        <th scope="row">{{$vendedor->id}}</th>
        <td>{{$vendedor->nome_vendedor}}</td>
        <td>{{$vendedor->email}}</td>
        <td>{{$vendedor->senha}}</td>
        
        </tr>
</tbody>
@endsection