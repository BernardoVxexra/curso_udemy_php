<?php
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
    // Decodifica o cookie JSON
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"], true);
    
    // Verifica se a decodificação foi bem-sucedida e se a chave "empresa" existe
    if (is_array($obj) && isset($obj['empresa'])) {
        echo $obj['empresa'];  
    } else {
        echo "A chave 'empresa' não foi encontrada.";
    }
} else {
    echo "O cookie não está definido.";
}
?>