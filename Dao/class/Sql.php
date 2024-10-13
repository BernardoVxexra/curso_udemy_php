<?php
class Sql extends PDO {
    private $conn;

    public function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=exemplocurso", "root", "");
        // Conectando no banco
    }

    private function setParams($statement, $parameters = array()) {
        foreach ($parameters as $key => $value) {
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value) {
        $statement->bindValue($key, $value); // Use bindValue para vincular o valor diretamente
    }

    public function executeQuery($rawQuery, $params = array()) {
        $stmt = $this->conn->prepare($rawQuery); 
        //$rawQuery: Uma string que contém a consulta SQL que você deseja executar. 
        //Pode incluir parâmetros nomeados, como :id ou :name.
        var_dump($params);
    
        
        $this->setParams($stmt, $params);//Vinculando os parametros fornecidos no array $params

        $stmt->execute(); // Execute a declaração

        return $stmt; // Retorna a declaração para uso posterior
    }

    public function select($rawQuery, $params = array()): array {
        $stmt = $this->executeQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Corrigido para fetchAll
    }
}
?>
