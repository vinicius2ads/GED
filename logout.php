<?php 
  session_start();

  //DESTRÓI AS VARIÁVEIS 
  unset($_SESSION[user]); 
  //unset($_SESSION[nome]);

   //REDIRECIONA PARA A TELA DE LOGIN 
   Header("Location: login.php"); 
?>