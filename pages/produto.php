<h2 class="text-center">PRODUTOS</h2>
<div class="row">
    <?php
        foreach ($produto as $indice => $valor){
            echo "<div class='col-12 col-md-3'>
            <p class='text-center'>
                {$valor['nome']}
                <br>
                <a href='produtos/{$indice}' class='botao btn btn-outline-light'>
                    Detalhes
                </a>
            </p>
            </div>";
        }
   ?>
</div>