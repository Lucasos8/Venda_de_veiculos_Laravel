@extends('layouts.default')
@section('content')
    <h2>Lista de veiculos</h2>    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Imagem</td>
                <td>Dados</td>
                <td>cilindrada</td> 
                <td>marca</td>
                <td>ano</td>
                <td>valor</td>                                 
                <td>Editar dados</td>
                <td>Excluir dados</td>
            </tr>
        </thead>
        @csrf
        <tbody>
            @foreach($veiculos as $veiculo)  
            <tr>
                <td><img src="{{ asset('storage/' . $veiculo -> image) }}" alt="Imagem do veículo" width="175px" height="125px"> </td>
                <td>{{$veiculo->nome}} <br> {{$veiculo->descrição}} </td>
                <td>{{$veiculo->cilindrada}}</td>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->ano}}</td>
                <td>{{$veiculo->valor}}</td>
                <td><a class="btn btn-outline-primary" href="{{route('veiculando.edit',['id' => $veiculo->id])}}">Editar</a></td>
                <td>
                    <form method="POST" action="{{ route('veiculando.delete', ['id' => $veiculo->id]) }}">
                        @csrf
                    <button type="submit" class="btn btn-outline-danger">Deletar</button>
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
@stop  

