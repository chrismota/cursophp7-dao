<?php
require_once("config.php");
// Carrega por um id
// $root = new Usuario();
// $root->loadById(3);

//Carrega a lista
// $result = Usuario::getList();
// echo json_encode($result);

//faz busca
// $result = Usuario::search("ro");
// echo json_encode($result);

//carrega um usuário usando login e senha.
// $root = new Usuario();
// $root->login("root","asdsaas");
// echo $root;

//Criando novo usu
// $aluno = new Usuario("aluno","@lun0");
// $aluno->insert();
// echo $aluno;

//Alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(4);
// $usuario->update("professor", "12123");
// var_dump($usuario);


$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;
?>