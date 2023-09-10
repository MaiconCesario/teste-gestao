@extends('layouts.basico')

@section('titulo', 'Vendas Realizadas')

@section('conteudo')

<table>
    <thead>
        <tr>
            <th scope="col">ID da venda</th>
            <th scope="col">Nome do Vendedor</th>
            <th scope="col">Email do Vendedor</th>
            <th scope="col">Valor da Venda</th>
            <th scope="col">Comissão</th>
            <th scope="col">Data da Venda</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendas as $venda)
        <tr>
            <th scope="row">{{ $venda->id }}</th>
            <td>{{ $venda->vendedor->nome_vendedor }}</td>
            <td>{{ $venda->vendedor->email }}</td>
            <td>{{ $venda->valor_total }}</td>
            <td>{{ $venda->comissao }}</td>
            <td>{{ $venda->data_venda }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
