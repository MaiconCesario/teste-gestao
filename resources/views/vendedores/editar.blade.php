@extends('layouts.basico')

@section('titulo', 'Editar')

@section('conteudo')   
    
    
        <form class="row g-3" method="post" action="{{route('vendedor.update',['vendedor' => $vendedor->id])}}">
            <div style="width:30%; margin-right:auto; margin-left:auto;;">
                @csrf
                @method('PUT')
                    <div class="col-12">
                        <label for="" class="form-label">Nome</label>
                        <input type="text" class="form-control" value="{{$vendedor->nome_vendedor?? old('nome_vendedor')}}" name="nome_vendedor" placeholder="Nome Vendedor">
                        {{$errors->has('nome_vendedor') ? $errors->first('nome_vendedor') : ''}}
                    </div>
                    <div class="col-md-6">
                        <label for="" name ="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$vendedor->email ?? old('nome')}}" class="form-control" id="inputEmail4">
                        {{$errors->has('email') ? $errors->first('email') : ''}}
                    </div>
                    <div class="col-md-6">
                        <label for="" name="password" class="form-label">Senha</label>
                        <input type="password" name="senha" value="{{$vendedor->senha ?? old('nome')}}"class="form-control" id="inputPassword4">
                        {{$errors->has('senha') ? $errors->first('senha') : ''}}
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
        </form>
    
@endsection