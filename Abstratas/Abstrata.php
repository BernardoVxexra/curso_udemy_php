<?php

interface Veiculo {
    //O que umm veiculo precisa ter?
     
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocamarcha($marcha);



} 
 
 abstract class Automovel implements Veiculo { //Qualquer automovel implementa a classe veiculo
    //Porém ele não pode ser instanciado

    public function acelerar($velocidade) {
        echo "Acelerando a " . $velocidade . " km/h" . "<br/>";
    }

    public function frear($velocidade) {
        echo "Freando a " . $velocidade . " km/h" . "<br/>";
    }

    public function trocamarcha($marcha) {
        echo "Trocando para a marcha " . $marcha . "<br/>";
    }
}

class DelRey extends Automovel{
    public function empurrar(){

    }
}

$carro = new DelRey();
$carro->acelerar(200)

?>