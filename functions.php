<?php



function buscarUsuarios(){
  $usuario = file_get_contents("./produtos.json");
  $usuario = json_decode($usuario, true);
  return $usuario;
}

//echo buscarUsuarios();

function cadastrarUsuarios($nome, $email, $senha){


$usuario = buscarUsuarios();

$u = ['nome'=>$nome, 'email'=>$email, 'senha'=>$senha];

$usuario[]= $u;

$usuario = json_encode($usuario);


if($usuario){
  file_put_contents("./produtos.json", $usuario);
}


}







?>