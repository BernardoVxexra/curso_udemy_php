<?php

  //Iniciando a class com o nome endereço
 class Endereco{
    
    //Inicializando as váriaveis privadas
    private $logradouro;
    private $numero;
    private $cidade;

    //Getters e Setters
    
    public function /*<--Método normal , Método mágico --> */ __construct($a,$b,$c) //Passe os paramêtros
    //a = logradouro
    //b = numero
    //c = cidade
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        var_dump("Destruir");
    }

    public function  /*<--Método normal , Método mágico --> */  __toString() {
        return $this->logradouro. ", " .$this->numero. " - " .$this->cidade;

    }

 }


 $meuEndereco = new Endereco("Rua Ademar Saraiva" , "123", "Santos"); //Passar as informações do a,b,c

 echo $meuEndereco;
 


?>