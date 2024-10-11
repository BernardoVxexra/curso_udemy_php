<?php

 class Cadastro{

     private $nome;
     private $email;
     private $senha;


     public function getNome():string{
        return $this->nome;//Chamando o atributo nome pelo dolar this
     }
     public function getEmail():string{
        return $this->email;
     }
     public function getSenha():string{
        return $this->senha;
     }

 }

?>