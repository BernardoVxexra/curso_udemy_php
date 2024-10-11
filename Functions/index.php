<?php

 class Pessoa { //Criando a classe pessoa, sempre com letra maiuscula 
     public $nome;//Atributo

     public function falar() { //Método, pois é uma função dentro de uma classe.
        return "O meu nome é " .$this->nome; //$this representa a nossa classe já instanciada. 
        //usar somente dentro do método

     }
 }

 $glaucio = new Pessoa ();
 $glaucio->nome = "Glaucio Daniel";
 echo $glaucio->falar();
 


?>