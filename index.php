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
$root = new Usuario();
$root->login("root","asdsaas");
echo $root;
?>