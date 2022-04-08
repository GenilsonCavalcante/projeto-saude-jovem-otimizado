<?php
require_once("./url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Saúde Jovem</title>

   <link rel="shortcut icon" href="<?php echo $BASE_URL; ?>/saude-jovem-logo__icone-app.ico" type="image/x-icon" />
   <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/reset.css" />
   <!-- <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/index-php.css" /> -->
   <!-- <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/styles.css" /> -->
   <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/styles-otimizations.css" />
   <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/css/bots.css" />
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
   <header class="header">
      <div class="header__largura-maxima">
         <div>
            <figure>
               <a href="<?php echo $BASE_URL; ?>/index.php">
                  <img class="header__logo" src="assets/img/logos/saude jovem logo__horizontal original-larg-200.png" alt="Logo do Saúde Jovem" />
               </a>
               <figcaption class="header__figcaption">Logo do Saúde Jovem</figcaption>
            </figure>
         </div>

         <nav class="header__navegacao">
            <ul>
               <li>
                  <a class="header__navegacao-link" href="<?php echo $BASE_URL; ?>/index.php">Inicio</a>
               </li>
               <li>
                  <a class="header__navegacao-link" href="<?php echo $BASE_URL; ?>/assistente-virtual.php">Assistente Virtual</a>
               </li>
               <li>
                  <a class="header__navegacao-link" href="<?php echo $BASE_URL; ?>/equipe.php">Equipe</a>
               </li>
               <li>
                  <a class="header__navegacao-link" href="<?php echo $BASE_URL; ?>/download.php">Download</a>
               </li>
               <li>
                  <a class="header__navegacao-link" href=" <?php echo $BASE_URL; ?>/publicacoes.php">Publicações</a>
               </li>
            </ul>
         </nav>
      </div>
   </header>