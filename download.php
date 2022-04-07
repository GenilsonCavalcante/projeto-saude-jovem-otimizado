<?php
include_once("assets/templates/header.php");
?>
<main class="main">
   <div class="main__largura-maxima">
      <h2 class="main__titulo">Download</h2>

      <p class="main__paragraph">
         O aplicativo móvel Saúde Jovem, pode ser definido como uma ferramenta de comunicação em saúde que se ampara na promoção da saúde. Utiliza a tecnologia para interagir com os jovens usuários contribuindo para o conhecimento sobre as IST de forma simples, objetiva e acessível.
      </p>
      <p class="main__paragraph">
         Com o Saúde Jovem, você pode saber quais unidades de saúde estão mais próximas de você, qual o melhor trajeto para chegar até elas. Pode "favoritar" a sua unidade preferida e até obter informações como: telefone, endereço e horário de funcionamento. Pode também conversar com os bots para tirar dúvidas relacionadas às IST, de uma forma bem extrovertida. A ideia do projeto é seguir desenvolvendo novos módulos além de aprimorar o que já foi desenvolvido. Assim, se você tem alguma sugestão, é só enviar para a gente. Teremos o prazer em avaliar a viabilidade da sua ideia/sugestão.
      </p>
      <p class="main__paragraph">
         O Saúde Jovem já se encontra disponível para download nas lojas da Google Play Store e Apple Store.
      </p>

      <div class="main__fazer-download">
         <!--ESTILIZAÇÃO FEITA NO PRÓPRIO HTML-->
         <img class="main__fazer-download-img" src="<?php echo $BASE_URL; ?>/assets/img/logos/saude jovem logo__vertical origirinal-larg-200.png" alt="Logo Saúde Jovem" />
         <div class="main__lojas-virtuais">
            <a href="#"><img class="main__lojas-virtuais-img" src="<?php echo $BASE_URL; ?>/assets/img/play-store2.png" alt="Logo Google Play Store" /></a>
            <a href="#"><img class="main__lojas-virtuais-img" src="<?php echo $BASE_URL; ?>/assets/img/app-store.png" alt="Logo Apple Store" /></a>
         </div>
      </div>
   </div>
</main>
<?php
include_once("assets/templates/footer.php");
?>