<?php

$file = fopen("log.txt" , "a+"); //Espera 2 paramêtros (caminho do arquivo, como quer controlar o arquivo)
 
fwrite($file, date("Y-m-d H:i:s")); //Coloca a data.

fclose($file);

echo"Arquivo criado com sucesso";

?>