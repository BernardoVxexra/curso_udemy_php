<?php

  class Pessoa {

     public $nome = "Rasmus lerdof"; //Primeiro modelo de encapsulamento
     protected $idade = 48; // Segundo modelo de encapsulamento
     private $senha = "123456"; // Terceiro modelo de encapsulamento


     public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

     }

  }

  class Programador extends Pessoa{ //A classe programador vao estender tudo o que tem na pessoa(Menos Private)
    
    public function verDados(){

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

     }

  }

 //Agora iremos tentar acessar cada um desses valores
 //Observe que cada um está em um encapsulamento diferente
  $objeto = new Programador();

 // echo $objeto->senha . "<br/>"; 

 $objeto->verDados();//Ele consegue chamar todos pois é um método que está na mesma classe

?>

