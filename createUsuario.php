<?php

include("./functions.php");

// Valores padrões
$nome = '';
$email = '';
$senha = '';
$confirmacao = '';



// Variáveis de controle de erro
$nomeOk = true;
$emailOk = true;
$senhaOk = true;

// Verificar se o usuário enviou o formulário
if($_GET){

// Guardando o nome em $nome
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $senha = $_GET['senha'];
  $confirmacao = $_GET['confirmacao'];

// Validando o nome
  if(strlen($_GET['nome']) < 1){
    $nomeOk = false;
  }


// Validando senha
  if(strlen($senha) < 6 || $senha != $confirmacao){
    $senhaOk = false;
  }


// Validando o email
  if(strlen($_GET['email']) < 1){
  $emailOk = false;
  }

// Se tudo estiver ok, salva o usuário e redireciona para 
        // um dado endereço
        if($senhaOk && $nomeOk && $emailOk){

          // Salvando o usuário novo
          cadastrarUsuarios($nome, $email, $senha);

          // Redirecionando usuário para a lista de produtos
          header('location: indexProdutos.php');



        }

      }

    






?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/createUsuario.css">
    
    <title>Document</title>
</head>
<body>

<h1>CADASTRO</h1><br>
    
<form>
  <div id="nome" class="row">
    <div class="col">
      <input type="text" name="nome" class="form-control" placeholder="Nome">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Sobrenome"><br>
    </div>
  </div>

  
  <form>
  <div id="email" class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="anamaria@hotmail.com">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div id="senha" class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  

  <div id="senha" name="senha" class="form-group">
    <label for="exampleInputPassword1">Confirme sua senha</label>
    <input type="password" name="confirmacao" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

   
</form>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>