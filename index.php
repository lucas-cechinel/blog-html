<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilos css -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <title>Blog do Lucas</title>

    <!--Favicon-->
    <link rel="icon" href="img/favicon.png">

    <!--Javascript-->

    <script src="javascript.js" type="text/javascript"></script>


  </head>

  <body id="bg-custom">

      <?php include("menu.php") ?> <!-- Incluí o menu, que está em outro arquivo, através do PHP --> 

        <div class="pb-2" id="bg-custom">

          <section class="container"> <!-- Início conteúdo -->


          <h3 class="text-center py-3">Início</h3><br>
          
          <div>

            <!--Início Postagens-->

            <h5 >Postagens recentes </h5><br>

            <div class="media mb-4">

              <img src="img/postagem-2020.jpg" class="mr-3 align-self-center d-none d-md-block"> 

              <div class="media-body">
                <p><a href="licoes2020.php" class="h3 text-decoration-none">As lições de 2020</a></p>

                <blockquote>
                <cite class="text-secondary">Por Lucas Cechinel 25/11/2020</cite>
                </blockquote>

              </div>
                          
            </div>

            <div class="media mb-4">

              <img src="img/postagem-caixa.jpg" class="mr-3 align-self-center d-none d-md-block"> 

              <div class="media-body">
                <p><a href="caixa-madeira.php" class="h3 text-decoration-none">O conto da caixa de madeira</a></p>

                <blockquote>
                <cite class="text-secondary">Por Lucas Cechinel 28/10/2020</cite>
                </blockquote>

              </div>

            </div>
            <div class="media mb-4">

              <img src="img/postagem-robo.jpg" class="mr-3 align-self-center d-none d-md-block"> 

              <div class="media-body">
                <p><a href="inteligencia-artificial.php" class="h3 text-decoration-none">Inteligência artificial: Benigna ou maligna</a></p>

                <blockquote>
                <cite class="text-secondary">Por Lucas Cechinel 14/10/2020</cite>
                </blockquote>

              </div>

            </div>

            <div class="media mb-4">

              <img src="img/postagem-plagio.jpg" class="mr-3 align-self-center d-none d-md-block"> 

              <div class="media-body">
                <p><a href="plagio.php" class="h3 text-decoration-none">O perigo do plágio</a></p>

                <blockquote>
                <cite class="text-secondary">Por Lucas Cechinel 30/09/2020</cite>
                </blockquote>

              </div>

            </div>
            
            <div class="media mb-4">

              <img src="img/postagem-pirata.jpg" class="mr-3 align-self-center d-none d-md-block"> 

              <div class="media-body">
                <p><a href="consequencias-pirataria.php" class="h3 text-decoration-none">Consequências da pirataria na sociedade</a></p>

                <blockquote>
                <cite class="text-secondary">Por Lucas Cechinel 25/09/2020</cite>
                </blockquote>

              </div>

            </div>

          </div><!--Fim Postagens-->

        </div>
          
        </section> <!-- Fim conteúdo -->

      </div>

      <?php include("rodape.php")?>

      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>