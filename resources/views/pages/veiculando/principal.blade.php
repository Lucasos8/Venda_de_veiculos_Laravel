@extends('layouts.default')
@section('content')
    <h2>Lista de veiculos</h2>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>nome</td>
                <td>id</td>                <td>Acessar dados</td>
                <td>Excluir dados</td>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculos as $veiculo)
            <tr>
                <td>{{$veiculo->nome}}</td>
                <td>{{$veiculo->id}}</td>
                <td><a class="btn btn-outline-primary" href="{{route('veiculando.edit',['id' => $veiculo->id])}}">Editar</a></td>
                <td>
                    <form method="POST" action="{{route('veiculando.delete', ['id'=> $veiculo->id])}}">
                        @csrf
                        <button type="button" class="btn btn-outline-danger">Delete</button>                   
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>        
    </table>
@stop
@section('pagespecificscripts')
    <script>
    </script>
@stop/script>
@stop
lashdla