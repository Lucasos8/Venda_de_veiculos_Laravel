<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retistrando</title>
</head>
<body>
<header>Veiculando APP</header>
    <h1>Tela de cadastro</h1>
<form action="/cadastroVeiculo" method="POST">
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
        <button>Gravar Dados </button>
</body>
</html>