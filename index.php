<?php 

require_once("config.php");

//carrega um uusario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista 
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","123456");

echo $usuario;

//$sql = new sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

 ?>