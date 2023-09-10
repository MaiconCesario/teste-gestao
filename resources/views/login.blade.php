@extends('layouts.basico')

@section('titulo', 'Login')

@section('conteudo')


<form action="{{route('login')}}" method="post">
  @csrf
  <div style="width:30%; margin-left:auto; margin-right:auto;">
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Email</label>
        <input type="email" name="usuario" id="form2Example1" class="form-control" />
        {{$errors->has('usuario') ? $errors->first('usuario') : ''}}
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Senha</label>
        <input type="password" name="senha" id="form2Example2" class="form-control" />
        {{$errors->has('senha') ? $errors->first('senha') : ''}}
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
  </div>
  
</form>
<div style="width:30%; margin-left:auto; margin-right:auto;">
{{isset($erro) && $erro != '' ? $erro : ''}}
</div>

@endsection