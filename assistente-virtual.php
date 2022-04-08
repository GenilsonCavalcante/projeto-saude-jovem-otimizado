<?php
include_once("assets/templates/header.php");
?>
<main class="main">
   <div class="main__largura-maxima">
      <h2 class="main__titulo">Assistente Virtual</h2>

      <p class="main__paragraph">
         Durante a execução do projeto ouvimos jovens e adolescentes do Brasil,
         a partir dessa escuta optamos por criar cinco assistentes virtuais.
         Isso mesmo, cinco, um representando cada uma das regiões do país.
         Assim, você pode escolher com quem quer conversar sobre suas dúvidas
         referente às IST.
      </p>
      <p class="main__paragraph">
         Esses “personas” trazem consigo marcas de
         regionalidade e simulam uma conversa humana jovial. Trata-se de bots
         cuja base de dados, atualmente apresenta 93 perguntas/respostas. A
         ideia é aumentar essa base de dados, ampliando a capacidade de
         respostas dos nossos assistentes virtuais.
      </p>
      <p class="main__paragraph">
         A inteligência artificial incorporada no desenvolvimento dos cinco bots possibilita que
         expressões regionais, gírias e até mesmo dúvidas não entendidas por
         eles sejam armazenadas, aprimorando o diálogo com o passar do tempo.
      </p>
      <p class="main__paragraph">
         Ou seja, atualmente, esperamos que algumas dúvidas não sejam
         compreendidas pelos nossos bots, porém as interações tornarão nossos
         bots mais resolutivos, aproximando-se cada vez mais do jeito jovem de
         se comunicar.
      </p>
      <p class="main__paragraph">
         Vamos testar? Você pode escolher um dos nossos
         assistentes virtuais no App Saúde Jovem ou aqui no site do projeto,
         você vai perceber que cada um terá uma maneira diferente de interagir
         com você. Esse esforço tecnológico visa ampliar o vínculo com a
         população jovem e adolescente, contribuindo para a prevenção de
         doenças e agravos relativos às IST.
      </p>
      <p class="main__paragraph main__paragraph--margin-top">Escolha um personagem para tirar as suas dúvidas:</p>

      <div class="main__personas">
         <a class="main__personas-link" href="<?php echo $BASE_URL; ?>/ana.php">
            <div>
               <div class="main__caixa-dialogo">
                  <img class="main__personas-img" src="<?php echo $BASE_URL; ?>/assets/img/personas/ana-larg-300.png" alt="Imagem do bot Ana" />
                  <span class="main__caixa-dialogo-texto">Olá, sou a Ana</span>
               </div>
            </div>
            <p class="main__personas-p">Ana</p>
         </a>
         <a class="main__personas-link" href="<?php echo $BASE_URL; ?>/assets/html/gabriel.php">
            <div>
               <div class="main__caixa-dialogo">
                  <img class="main__personas-img" src="<?php echo $BASE_URL; ?>/assets/img/personas/gabriel-larg-300.png" alt="Imagem do bot Gabriel" />
                  <span class="main__caixa-dialogo-texto">Olá, sou o Gabriel</span>
               </div>
            </div>
            <p class="main__personas-p">Gabriel</p>
         </a>
         <a class="main__personas-link" href="<?php echo $BASE_URL; ?>/assets/html/joao.php">
            <div>
               <div class="main__caixa-dialogo">
                  <img class="main__personas-img" src="<?php echo $BASE_URL; ?>/assets/img/personas/joao-larg-300.png" alt="Imagem do bot João" />
                  <span class="main__caixa-dialogo-texto">Olá, sou o João</span>
               </div>
            </div>
            <p class="main__personas-p">João</p>
         </a>
         <a class="main__personas-link" href="<?php echo $BASE_URL; ?>/assets/html/lucas.php">
            <div>
               <div class="main__caixa-dialogo">
                  <img class="main__personas-img" src="<?php echo $BASE_URL; ?>/assets/img/personas/lucas-larg-300.png" alt="Imagem do bot Lucas" />
                  <span class="main__caixa-dialogo-texto">Olá, sou o Lucas</span>
               </div>
            </div>
            <p class="main__personas-p">Lucas</p>
         </a>
         <a class="main__personas-link" href="<?php echo $BASE_URL; ?>/assets/html/maria.php">
            <div>
               <div class="main__caixa-dialogo">
                  <img class="main__personas-img" src="<?php echo $BASE_URL; ?>/assets/img/personas/maria-larg-300.png" alt="Imagem do bot Maria" />
                  <span class="main__caixa-dialogo-texto">Olá, sou o Maria</span>
               </div>
            </div>
            <p class="main__personas-p">Maria</p>
         </a>
      </div>
   </div>
</main>

<script src="assets/js/carrossel.js"></script>
<?php
include_once("assets/templates/footer.php");
?>