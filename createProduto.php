<?php

//var_dump($_GET);

$nomeProduto = $_GET['nomeProduto'];
$precoProduto = $_GET['precoProduto'];
$descricaoProduto = $_GET['descricaoProduto'];
$fotoProduto = $_GET['fotoProduto'];

$nomeProdutoOk = true;
$precoProdutoOk = true;
//$_FILES; 
$fotoPodutoOk = true;



//gettype($number);

if (strlen($_GET['nomeProduto']) < 2) {
    $nomeProdutoOk = false;
   }

if (settype($precoProduto, "double") != 1){
  $precoProdutoOk = false;

} 

//echo"<br>".settype($precoProduto, "double");
//echo gettype ($precoProduto);

if ($fotoProduto == ""){
  $fotoPodutoOk = false;

}


function buscarProdutos(){
  $usuario = file_get_contents("./produtos.json");
  $usuario = json_decode($usuario, true);
  return $usuario;
}

//echo buscarUsuarios();

function cadastrar($fotos, $nome, $preco, $descricao){


$usuario = buscarProdutos();

$u = ['fotos'=>$fotos, 'nome'=>$nome, 'preco'=>$preco, 'descricao'=>$descricao];

$usuario[]= $u;

$usuario = json_encode($usuario);


if($usuario){
  file_put_contents("./produtos.json", $usuario);
  header('Location: indexProdutos.php');
}







}

   






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form method="GET" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome do Produto</label>
    <input name="nomeProduto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Panela Polishop">
  </div>
  <div class="form-group">
  <label for="exampleFormControlInput1">Preço do Produto</label>
    <input name="precoProduto" type="number" class="form-control" id="exampleFormControlInput1" placeholder="40,00">
  </div>

  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição do Produto</label>
    <textarea name=descricaoProduto class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Foto do Produto</label>
    <input name="fotoProduto" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <button>Enviar</button>
</form>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>