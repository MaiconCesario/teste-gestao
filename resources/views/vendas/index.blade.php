@extends('layouts.basico')

@section('titulo', 'Cadastro')

@section('conteudo')

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vendedor</th>
            <th scope="col">Vendas</th>
            <th scope="col">Ações</th>        
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        
        
    </tbody>
    </table>
@endsection