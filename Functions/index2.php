<?php

 class Carro{

    //Método Private não pode ser acessado por qualquer coisa apenas a classe que o criou
    private $modelo;
    private $motor;
    private $ano;

    //Get modelo
    public function getModelo() {

        return $this->modelo;
    }

    //Set Modelo
    public function setModelo($modelo){

        $this->modelo = $modelo;
        // esse this modelo é uma coisa e a $ modelo é outra, não se confunda.
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($motor){

          $this->motor = $motor;
    }

    
    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano){
        
          $this->ano = $ano;
    }

    public function exibir(){

        return array(
        "modelo"=>$this->getModelo(),
        "motor"=>$this->getMotor(),
        "ano"=>$this->getAno()
        );
    }

 }

 $gol = new Carro();
 $gol->setModelo("Gol GT");
 $gol->setMotor("1.6");
 $gol->setAno("2017");

 print_r($gol->exibir());

?>