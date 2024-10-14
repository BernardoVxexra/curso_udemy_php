<?php
// Dados a serem criptografados
$data = [
    "nome" => "Hcode"
];

// Definindo a chave secreta
define('SECRET', 'senha1234567890'); // A chave deve ter 16, 24 ou 32 bytes para AES

// Função para criptografar
function encrypt($data, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-128-CBC')); // Vetor de inicialização
    $encryptedData = openssl_encrypt(json_encode($data), 'AES-128-CBC', $key, 0, $iv);
    
    // Retorna os dados criptografados e o IV
    return base64_encode($encryptedData . '::' . $iv);
}

// Função para descriptografar
function decrypt($data, $key) {
    list($encryptedData, $iv) = explode('::', base64_decode($data), 2);
    return json_decode(openssl_decrypt($encryptedData, 'AES-128-CBC', $key, 0, $iv), true);
}

// Criptografando os dados
$encrypted = encrypt($data, SECRET);
echo "Dados criptografados: $encrypted\n";

// Descriptografando os dados
$decrypted = decrypt($encrypted, SECRET);
echo "Dados descriptografados: " . print_r($decrypted, true);
?>