<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RH Móveis Planejados</title>

  <base href="http://localhost/1A/RH_Moveis/">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="imagens/icone.png">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="didact-gothic-regular">

  <header>
    <nav id="navbar" class="fixed-top">
      <ul class="nav nav-underline justify-content-center">
        <li>
          <a href="#" class="logo ">
            <img src="imagens/logo.png" alt="Logo da empresa RH Móveis Planejados">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Home" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Produtos" href="#produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Sobre" href="#sobre">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Contato" href="contato">Contato</a>
        </li>
      </ul>
    </nav>

  </header>
  <main>
    <?php

      $pages = "home";
      if(isset($_GET["param"])){
        $param = explode("/", $_GET["param"]);
        $pages = $param[0];
      }

      $pages = "pages/{$pages}.php";

      include "produtos.php";

      if(file_exists($pages)){
        include $pages;
      }else{
        include "pages/erro.php";
      }

    ?>

  </main>

  <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-7">
            <div class="conteudo-footer">
              <p>Telefone: (44) 99860-8027</p>
              <p>Endereço: R. Francisco Preisner, 159 - Jardim Santa Cruz, Campo Mourão - PR, 87309-600</p>
              <p>Todos os direitos reservados</p>
            </div>
          </div>

          <div class="col-5">
            <div class="links">
              <a class="icon" href="https://www.instagram.com/_rh_moveis" target="_blank">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a class="icon" href="https://wa.me/5544998608027" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
              <a class="icon" href="https://www.facebook.com/rhmoveisplanejado" target="_blank">
                <i class="fa-brands fa-facebook"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
  </footer>




  <script src="js/navbar.js"></script>
  <script src="js/carrossel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://kit.fontawesome.com/2e7313998e.js" crossorigin="anonymous"></script>
</body>

</html>