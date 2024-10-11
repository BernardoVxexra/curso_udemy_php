<?php
 require_once("config.php");

 $cad = new Cadastro();

 $cad->setNome("Djalma Sindeux");
 $cad->setEmail("djalma@code.com.br");
 $cad->setSenha("123456");

 echo $cad;
?>