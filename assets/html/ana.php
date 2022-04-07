<?php
include_once("../templates/header.php");
?>

<main>
  <div class="tamanhoMaximo">
    <div class="campoAssistenteVirtual">
      <div class="imagemPersona">
        <img src="../img/personas/ana-larg-300.png" alt="Imagem da Ana" />
      </div>

      <!-- <div class="caixaDeDialogo">
                   
                </div> -->
    </div>

    <div class="chat">
      <textarea name="inputText" placeholder="Tire suas dúvidas..." id="inputText" maxlength="200" rows="1"></textarea>
      <!-- <br> -->
      <a>
        <!-- FALTA O HREF -->
        <img src="../img/enviar-mensagem-svg.svg" alt="Icone de Enviar Mensagem" />
      </a>
    </div>

    <br />
    <br />
    <a href="../../assistente-virtual.html">
      <img src="../img/icons8-voltar-48.png" alt="Icone de voltar" />
    </a>
  </div>
</main>
<script src="../js/inputTextBot.js"></script>

<?php
include_once("../templates/footer.php");
?>