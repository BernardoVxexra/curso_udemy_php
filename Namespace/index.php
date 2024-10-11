<?php
 require_once("config.php");

 use Cliente\Cadastro;//Dizendo que a classe cadastro é a que está dentro do namespace

 $cad = new Cadastro();

 $cad->setNome("Djalma Sindeux");
 $cad->setEmail("djalma@code.com.br");
 $cad->setSenha("123456");

  $cad->registrarVenda();
?>