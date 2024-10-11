<?php

 class Cadastro{

     private $nome;
     private $email;
     private $senha;


     public function getNome():string{
        return $this->nome;//Chamando o atributo nome pelo dolar this
     }

 }

?>