<?php
interface Veiculo {
    //O que umm veiculo precisa ter?
     
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocamarcha($marcha);



} 
 
class Civic implements Veiculo {

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




    $carro = new Civic();
    $carro->acelerar(100); // Saída: Acelerando a 100 km/h
    $carro->frear(50);     // Saída: Freando a 50 km/h
    $carro->trocamarcha(3); // Saída: Trocando para a marcha 3

?>
