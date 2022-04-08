<?php
  include_once("assets/templates/header.php");
?>

<main class="main">
  <div class="main__largura-maxima">
    <div class="main__campo-chatbot">

      <div class="main__div-persona">
        <img class="main__imagem-persona" src="<?php echo $BASE_URL; ?>/assets/img/personas/ana-larg-300.png" alt="Imagem da Ana" title="Ana" />
      </div>

      <div class="main__caixa-dialogo">
        <!-- CAMPO DE MENSAGENS -->
        <div class="main__caixa-dialogo-bot">
          <!-- MENSAGENS DO BOT -->
        </div>
        <div class="main__caixa-dialogo-usuario">
          <!-- MENSAGENS DO USUÁRIO -->
        </div>
      </div>

    </div>

    <label class="main__chat" for="textarea">
      <form action="process.php" method="GET">
        <textarea onkeydown="keydownFunction()" name="text" placeholder="Tire suas dúvidas..." class="main__textarea" id="textarea" maxlength="200" rows="1"></textarea>

        <label class="main__label-img" for="input-submit">
          <img class="main__img-enviar-msg" src="<?php echo $BASE_URL; ?>/assets/img/enviar-mensagem-svg.svg" alt="Icone de Enviar Mensagem" />
        </label>

        <input type="submit" class="main__input-submit" id="input-submit" value="Enviar">
      </form>
    </label>

    <a href="<?php echo $BASE_URL; ?>/assistente-virtual.php">
      <img src="<?php echo $BASE_URL; ?>/assets/img/icons8-voltar-48.png" alt="Icone de voltar" />
    </a>
  </div>
</main>

<script src="<?php echo $BASE_URL; ?>/assets/js/scroll-textarea.js"></script>
<script src="<?php echo $BASE_URL; ?>/assets/js/keydown-enter.js"></script>

<?php
  include_once("assets/templates/footer.php");
?>