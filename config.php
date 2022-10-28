<?php
   define("HOST", "localhost");
   define("USERNAME", "root");
   define("PASSWORD", "");
   define("DATABASE", "cadastro");

   $connect = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);

   if($connect->error){
      die("Falha na conexão: " . $connect->error);
   }
?>