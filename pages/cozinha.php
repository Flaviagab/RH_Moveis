<div class="body-produto">
  <h2 class="text-center">COZINHA</h2>

  <div class="row">
    <?php
    foreach ($produtos as $id => $valor) {
      if ($valor["categoria"] === "cozinha") {
        echo "<div class='col-md-3 fotos text-center'>
                        <img src='{$valor['foto']}' class='img-fluid' onclick='abrirModal(\"{$valor['foto']}\")'>
            </div>";
      }
    }
    ?>

  </div>
  <div class="modal fade" id="modalImagem" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-conteudo">
        <button type="button" class="btn" data-bs-dismiss="modal"><i class="fa-solid fa-xmark icon-modal"></i></button>
        <div class="modal-body d-flex justify-content-center align-middle">
          <img src="" alt="" id="imagemAmpliada" class="imagem-modal">
        </div>
      </div>
    </div>
  </div>
</div>