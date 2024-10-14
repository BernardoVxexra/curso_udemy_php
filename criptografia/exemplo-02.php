<?php

$cadastro = [
      "nome" => "Taligado" //Valor associado
];//Esses serão os dados a serem criptografados 

define('SECRET', 'senha1234567890'); // A chave deve ter 16, 24 ou 32 bytes para AES

function encrypt($cadastro, $key){
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-128-CBC')); // Vetor de inicialização
    $encryptedData = openssl_encrypt(json_encode($cadastro), 'AES-128-CBC', $key, 0, $iv);

    return base64_encode($encryptedData . '::' . $iv);
}

$encrypted = encrypt($cadastro, SECRET);
echo "Dados criptografados se fodeu: $encrypted\n";
?>