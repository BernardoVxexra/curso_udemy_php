<?php

$cadastro = [
    "nome" => "Taligado" //Valor associado
];//Esses serão os dados a serem criptografados


define('SECRET', 'senha1234567890');

function decrypt($cadastro, $key) {
    list($encryptedData, $iv) = explode('::', base64_decode($cadastro), 2);
    return json_decode(openssl_decrypt($encryptedData, 'AES-128-CBC', $key, 0, $iv), true);
}

$decrypted = decrypt($encrypted, SECRET);
echo "Dados descriptografados: " . print_r($decrypted, true);

?>