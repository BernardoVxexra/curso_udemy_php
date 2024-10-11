<?php 

//Criando a classe documento
 class Documento{
    
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
       $resultado = Documento::validarCPF($numero);

         if($resultado === false){
            throw new Exception("O CPF informado não é válido no Banco de dados", 1);
         }

       $this->numero = $numero;
    }

 public static  function validarCPF($cpf):bool {

      //Verifica se um número foi informado
       if(empty($cpf)) return false;

       // Remove caracteres não numéricos do CPF e preenche com zeros à esquerda, se necessário, para garantir que tenha 11 dígitos.
       $cpf = preg_replace('[^0-9]' , '' , $cpf);
       $cpf = str_pad($cpf, 11 , '0', STR_PAD_LEFT);

       //Verifica se o número de digitos informados é igual a 11
       if(strlen($cpf) != 11){
         return false;
       }

       //Verifica se nenhuma das sequências invaalidas abaixo 
       //foi digitada. Caso afirmativo, retorna falso.
       else if($cpf == '00000000000' ||
         $cpf == '11111111111' || 
         $cpf == '22222222222' || 
         $cpf == '33333333333' || 
         $cpf == '44444444444' || 
         $cpf == '55555555555' || 
         $cpf == '66666666666' || 
         $cpf == '77777777777' || 
         $cpf == '88888888888' || 
         $cpf == '99999999999' ) {
            return false;
         //Calcula os digitos verificadores para verificar se o cpf é valido         
         } else {

            for($t = 9; $t < 11; $t++) {

               for($d = 0, $c = 0; $c <$t; $c++) {
                  $d += $cpf[$c] * (($t + 1) - $c);
               }
               $d = ((10 * $d) % 11) % 10;
               if($cpf[$c] != $d) {
                  return false;
               }
            }

            return true;
         }

   }

}

/*
 $cpf = new Documento(); //não esqueça $cpf é uma instancia
 $cpf->setNumero("61400609070");

 var_dump($cpf->getNumero());
 */var_dump(Documento ::validarCPF("61400609070"));

?>