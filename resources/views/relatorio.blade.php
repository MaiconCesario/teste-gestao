@extends('layouts.basico')

@section('titulo', 'Vendas Realizadas')

@section('conteudo')
    <div class="col-md-10 offset-md-1 dashboard-titlecontainer">
        <h1>Vendas</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count(vendas) > 0)
        @else
            <p>Você ainda não possui nenhuma venda</p>
        @endif
    </div>
@endsection