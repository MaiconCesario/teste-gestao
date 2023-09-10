@extends('layouts.basico')

@section('titulo', 'Cadastro')

@section('conteudo')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="row g-3" method="post" action="{{route('vendedor.store')}}">
    @csrf
        <div class="" style="width:30%; margin-left: auto; margin-right:auto">
            <div class="col-12">
                <label for="" class="form-label">Nome</label>
                <input type="text" class="form-control" value="{{ old('nome')}}" name="nome" placeholder="Nome Vendedor">
                {{$errors->has('nome') ? $errors->first('nome') : ''}}
            </div>

            <div class="col-md-6">
                <label for="" name ="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email')}} "name="email" class="form-control" id="inputEmail4">
                {{$errors->has('email') ? $errors->first('email') : ''}}
            </div>

            <div class="col-md-6">
                <label for="" name="password" class="form-label">Senha</label>
                <input type="password" value="{{ old('senha')}}" name="senha" class="form-control" id="inputPassword4">
                {{$errors->has('senha') ? $errors->first('senha') : ''}}
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

    {{isset($erro_cadastro) && $erro_cadastro != '' ? $erro_cadastro : ''}}
@endsection