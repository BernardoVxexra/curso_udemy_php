<?php

class Usuario {
    private $idusuario;
    private $deslogin;
    private $dessenha;

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdusuario($value) {
        $this->idusuario = $value;
    }

    public function getDeslogin() {
        return $this->deslogin;
    }

    public function setDeslogin($value) {
        $this->deslogin = $value;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function setDessenha($value) {
        $this->dessenha = $value;
    }

    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM usuario WHERE id = :id", array(
            ":id" => $id
        ));
        if (isset($results[0])) {
            $row = $results[0];

            $this->setIdusuario($row['id']);
            $this->setDeslogin($row['Login']); // Certifique-se de que o nome da coluna está correto
            $this->setDessenha($row['Senha']); // Certifique-se de que o nome da coluna está correto
        }
    }

    public function __toString() {
        return json_encode(array(
            "id" => $this->getIdusuario(),
            "Login" => $this->getDeslogin(),
            "Senha" => $this->getDessenha() // Considere omitir a senha
        ));
    }
}

?>