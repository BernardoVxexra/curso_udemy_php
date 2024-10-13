<?php 

 require_once("config.php");

//$root = new Usuario();
//$root->loadById(2);
//echo $root;
/* $sql = new Sql();
 $usuarios = $sql->select("SELECT * FROM produtos ");
 echo json_encode($usuarios);*/

 //$lista  = Usuario::getList();
 //echo json_encode($lista);
 //Carrega uma lista buscando pelo login
 //$search = Usuario::search("a");
 //echo json_encode($search);

 $usuario = new Usuario();
 $usuario->login("a", "123");

 echo $usuario;

?>