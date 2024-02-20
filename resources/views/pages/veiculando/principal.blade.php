@extends('layouts.default')
@section('content')
    <h2>Lista de veiculos</h2>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>foto</td>
                <td>nome</td>
                <td>cilindrada</td> 
                <td>marca</td>
                <td>ano</td>
                <td>valor</td>                                 
                <td>Acessar dados</td>
                <td>Excluir dados</td>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculos as $veiculo)
            <tr>
                <td><img src="app\imagemCarro{{ $$veiculo->image}}"</td>
                <td>{{$veiculo->nome}}</td>
                <td>{{$veiculo->cilindrada}}</td>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->ano}}</td>
                <td>{{$veiculo->valor}}</td>
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
