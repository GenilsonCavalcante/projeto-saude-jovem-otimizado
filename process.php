<!-- conexão com o bot -->
<?php
   include_once("url.php");

   header("Location: " . $_SERVER["HTTP_REFERER"]); //Redireciona para última página acessada pelo usuário
