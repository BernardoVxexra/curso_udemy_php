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

     //Setters

     public function setNome($nome){
        $this->nome = $nome;//Atributo nome recebe paramêtro nome
     }
     public function setEmail($email){
        $this->email = $email;
     }
     public function setSenha($senha){
        $this->senha = $senha;
     }

     public function __toString()
     {
        return json_encode(array(
            //Aqui estamos mandando ele trazer estes atributos
             "nome"=>$this->getNome(),
             "email"=>$this->getEmail(),
             "senha"=>$this->getSenha()
        ));
     }

 }

?>