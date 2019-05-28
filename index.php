<?php

require_once("config.php");
//carregar um usuario
//$root = new Usuario();
//$root->loadById(6);
//echo $root;
//carregar uma lista de usuario 
//$lista = Usuario::getList();

//echo json_encode($lista);

//carrega uma lista buscando pelo login
//$search = Usuario::search("Ca");
//echo json_encode($search);

//carrega um usuario usando login e a senha 

$usuario = new Usuario();
$usuario->login("root", "@1234");

echo $usuario;


?>