@extends('layouts.default')
@section('content')
<form action="/cadastroVeiculo" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="hidden" name="id" value="{{isset($veiculo)?$veiculo->id:null}}">
        <label for="">nome_veiculo</label>
        <input type="text" placeholder="Digite o nome do veiculo." name="nome_veiculo" value="{{isset($veiculo)?$veiculo->nome:''}}"> 
        <br /> <br />
        <label for="">ano_veiculo</label>
        <input type="number" placeholder="Digite o ano do veiculo." name="ano_veiculo" value="{{isset($veiculo)?$veiculo->ano:''}}"> 
        <br /> <br />
        <label for="">marca_veiculo</label>
        <input type="text" placeholder="Digite a marca do veiculo." name="marca_veiculo" value="{{isset($veiculo)?$veiculo->marca:''}}"> 
        <br /> <br />
        <label for="">cilindrada_veiculo</label>
        <input type="text" placeholder="Digite a cilindrada do veiculo." name="cilindrada_veiculo" value="{{isset($veiculo)?$veiculo->cilindrada:''}}"> 
        <br /> <br />
        <label for="">descrição_veiculo</label>
        <input type="text" placeholder="Digite a descrição do veiculo." name="descrição_veiculo" value="{{isset($veiculo)?$veiculo->descrição:''}}">
        <br /> <br />
        <label for="">valor_veiculo</label>
        <input type="text" placeholder="Digite o valor do veiculo." name="valor_veiculo" value="{{isset($veiculo)?$veiculo->valor:''}}"> 
        <br> <br>
        <label for="image">imagem do veiculo:</label>
        <input type="file" id="image" name= "image" class="form-control-file">
        <br> <br>
        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
</form>  
@stop