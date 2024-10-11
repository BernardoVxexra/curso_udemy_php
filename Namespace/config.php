 <?php
   spl_autoload_register(function($nameClass){

      $dirClass = "class"; //Váriavel para encontrar o diretório
      $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; //Procurando arquivo no diretório

      if(file_exists($filename)){
             
        require_once($filename); //Verificando se o arquivo existe
      }
   }); //Criando autoload para usar no namespace
 ?>