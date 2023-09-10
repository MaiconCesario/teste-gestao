@extends('layouts.basico')

@section('titulo', 'Vendedores')

@section('conteudo')


    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Vendedor</th>
        <th scope="col">Email</th>
        <th scope="col">Vendas</th>
        <th scope="col">Edição</th>
        <th scope="col">Exclusão</th>
        
        </tr>
    </thead>

    @if(session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
        @else
           <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
    <tbody>
    @foreach($lista_vendedores as $vendedor)
        <tr>
        <th scope="row">{{$vendedor->id}}</th>
        <td>{{$vendedor->nome_vendedor}}</td>
        <td>{{$vendedor->email}}</td>
        <td>
            <a href="{{route('vendedor.show',['vendedor' => $vendedor->id])}}">
                <button type="button" class="btn btn-primary">
                    Vendas
                </button>
            </a>
        </td>
        <td>
            <a href="{{route('vendedor.edit',['vendedor' => $vendedor->id])}}" >
                <button type="submit" class="btn btn-primary">
                    Editar
                </button>
            </a>
        </td>       
        <td>
            <form method="post" action="{{route('vendedor.destroy',['vendedor' => $vendedor->id])}}">
            @CSRF
            @method('DELETE')
                <a href="">
                    <button type="submit" class="btn btn-danger">
                        Deletar
                    </button>
                </a>
            </form>
        </td>
        </tr>
    @endforeach
        
@endsection