<?php

namespace Cliente; //Sabe que tá na subpasta Cliente

 class Cadastro extends \Cadastro{ //Vai na raiz e procura a classe cadastro
    public function registrarVenda() {
        echo "foi registrado uma venda para o cliente" . $this->getNome();
    }
 }
?>