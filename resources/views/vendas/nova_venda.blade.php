{{--@extends('layouts.basico')

@section('titulo', 'Cadastro')

@section('conteudo')


    <form class="row g-3" method="post" action="{{route('vendas.store')}}">
    @csrf
    <div style="width:30%; margin-left:auto; margin-right:auto;">
        <div class="col-md-4">
            <label for="inputState" class="form-label">Vendedor</label>
                <select name="id" class="form-select">
                        <option>...Selecione o vendedor...</option>
                        
                    @foreach($vendedores as $vendedor)
                        <option value="{{$vendedor->id}}">{{$vendedor->nome_vendedor}}</option>                        
                    @endforeach
                </select>
        </div>
        <div class="col-12">
                <label for="" name="valor_venda" class="form-label">Valor da Venda</label>
                <input type="number" class="form-control" name="valor_total" placeholder="Valor da Venda"/>
            </div>        

            <div class="col-12">
                <label for="" name="data_venda" class="form-label">Data</label>
                <input type="date" class="form-control" name="data_venda" placeholder="Valor da Venda"/>
            </div>          
            <div class="col-12">
                <label for="" class="form-label">Comissão</label>
                <input class="form-control" type="text" name ="comissao" value="8.50%" aria-label="Disabled input example" placeholder="" disabled readonly>
            </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar Venda</button>
            </div>
        </div>
    </form>
@endsection--}}

@extends('layouts.basico')

@section('titulo', 'Cadastro')

@section('conteudo')

     @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="row g-3" method="post" action="{{ route('vendas.store') }}">
        @csrf
        <div style="width:30%; margin-left:auto; margin-right:auto;">
            <div class="col-md-4">
                <label for="id" class="form-label">Vendedor</label>
                <select id="id" name="id" class="form-select">
                    <option value="">...Selecione o vendedor...</option>
                    @foreach($vendedores as $vendedor)
                        <option value="{{ $vendedor->id }}">{{ $vendedor->nome_vendedor }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="valor_total" class="form-label">Valor da Venda</label>
                <input type="number" class="form-control" id="valor_total" name="valor_total" placeholder="Valor da Venda"/>
            </div>
            <div class="col-12">
                <label for="data_venda" class="form-label">Data</label>
                <input type="date" class="form-control" id="data_venda" name="data_venda" placeholder="Valor da Venda"/>
            </div>
            <div class="col-12">
                <label for="comissao" class="form-label">Comissão</label>
                <input class="form-control" type="text" id="comissao" name="comissao" value="8.50%" aria-label="Disabled input example" placeholder="" disabled readonly>
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar Venda</button>
          </div>
    </form>
        </div>
        

@endsection
