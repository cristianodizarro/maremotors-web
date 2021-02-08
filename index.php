<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template para o carousel Bootstrap</title>

    <!-- Principal CSS do Bootstrap / css vindo do modelo inicial-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <!-- Estilos customizados para esse template -->
    
    <link rel="stylesheet" href="Views\style\framework\bootstrap\bootstrap-4.5.2-dist\css\bootstrap.min.css" >
    
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="padding: 0.1rem 1rem">
        <a class="navbar-brand" style="line-height: 3" href="#">
        <img style="margin-right:15px" src="Midias\img\favicon\favicon-moto.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy"/>
        Maré Motos
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav menu-navbarEsquerda ">
            <li class="nav-item">
              <a class="nav-link" id="paginaInicial" href="#">Inicio <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="paginaServico" href="#">Serviços </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="paginaMotos" href="#">Motos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="paginaContato" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main" style="background: #343a40">

     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" >
          <img src="Midias\img\img_slider\Sem título-2.jpg" style="margin-top: 70px" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="Midias\img\img_slider\Sem título-3.jpg" style="margin-top: 70px"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="Midias\img\img_slider\Sem título-4.jpg" style="margin-top: 70px" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


      <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

      <div class="container marketing">

        <!-- COMEÇAM AS MENCIONADAS FEATUREZINHAS xD -->
        <br>
        <h1 style="color: red">Motos disponíveis para venda</h1>
        <hr class="featurette-divider" style="margin: 20px; background-color: #fff"">
        <div class="card-deck" >
          <div class="card" >
            <img src="Midias\img\img_card_anuncio\card_moto_azul_01.jpg"  class="card-img-top" alt="...">
            <div class="card-body" >
              <h5 class="card-title">Modelo da Moto</h5>
              <p class="card-text">Descrição das condições de compra da moto e outras informações.</p>
              <a href="#" class="btn btn-dark">Saiba mais...</a>
            </div>
          </div>
          <div class="card"  >
            <img src="Midias\img\img_card_anuncio\card_moto_azul_01.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Modelo da Moto</h5>
              <p class="card-text">Descrição das condições de compra da moto e outras informações.</p>
              <a href="#" class="btn btn-dark">Saiba mais...</a>
            </div>
          </div>
          <div class="card"  >
           <img src="Midias\img\img_card_anuncio\card_moto_cinza.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Modelo da Moto</h5>
              <p class="card-text">Descrição das condições de compra da moto e outras informações.</p>
              <a href="#" class="btn btn-dark">Saiba mais...</a>
            </div>
          </div>
          <div class="card"  >
            <img src="Midias\img\img_card_anuncio\card_moto_laranja.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Modelo da Moto</h5>
              <p class="card-text">Descrição das condições de compra da moto e outras informações.</p>
              <a href="#" class="btn btn-dark">Saiba mais...</a>
            </div>
          </div>
          <div class="card"  >
            <img src="Midias\img\img_card_anuncio\card_moto_azul_01.jpg"  class="card-img-top" alt="...">
            <div class="card-body" >
              <h5 class="card-title">Modelo da Moto</h5>
              <p class="card-text">Descrição das condições de compra da moto e outras informações.</p>
              <a href="#" class="btn btn-dark">Saiba mais...</a>
            </div>
          </div>
          </div>
        
        
        

        <hr class="featurette-divider" style="margin: 20px; background-color: #fff"><br>

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading" style="color: red">Manutenção da sua moto</h2>
            <p class="lead">A loja com uma gama completa de serviços de manutenção para sua moto.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://www.autobicicletao.com.br/arquivos/noticias/pecasdeumamoto.jpg" data-src="" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading" style="color: red">Compra e venda de motos.</h2>
            <p class="lead">Venda e compra de motos. Fazemos financiamento de até 100% do valor.<br> Saia com sua moto .</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="Midias\img\img_textos\banner_01.jpg" data-src="" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider" style="margin: 40px">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; Dizarro, 2020 &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
      </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Correspondente via externa -> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    
    
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <script src="Views\style\framework\bootstrap\bootstrap-4.5.2-dist\js\bootstrap.min.js" ></script>
    
    <!-- scripts da página inicial -->
    <script src="Views\style\style-proprietario\script\script_pagina_inicial.js"></script>
    
    
  </body>
</html>
