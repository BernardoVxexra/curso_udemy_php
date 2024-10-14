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
        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    public static  function getList(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM usuario ORDER BY Login;");
    } //Pode se analisar que não usamos this então será um método statico


    public static function search($login){
       $sql = new Sql();

       return $sql->select("SELECT * FROM usuario WHERE Login LIKE :SEARCH  ORDER BY Login ", array(
        ':SEARCH' => "%". $login . "%"
       ));

    }
    public function login($login, $password){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM usuario WHERE Login = :LOGIN AND Senha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));
        if (count($results) > 0) {
          
            $this->setData($results[0]);

        } else{
            throw new Exception("Login e/ou senha invalidos");
            
        }
    }
    public function setData($data){
        $this->setIdusuario($data['id']);
        $this->setDeslogin($data['Login']); 
        $this->setDessenha($data['Senha']); 
    }

    //Criando método insert utilizando o DAO
    public function insert(){
        $sql = new Sql();
          $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
              ':LOGIN'=>$this->getDeslogin(),
              ':PASSWORD'=>$this->getDessenha()
          ));

          if(count($results) > 0){
            $this->setData($results[0]);
          }
    }

    public function update($Login, $password){
        $this->setDeslogin($Login);
        $this->setDessenha($password);
    
        $sql = new Sql();

        $sql->query("UPDATE usuario SET Login = :LOGIN, Senha = :PASSWORD WHERE Id = :ID", array(
            
        )); 
        
    }

    public function __construct($login = "" , $password = "")
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
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