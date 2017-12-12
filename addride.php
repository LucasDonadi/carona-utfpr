<?php
session_start();
include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carona UTFPR</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <?php 
        $ponto = mysqli_query($conecta, "SELECT * FROM ponto ORDER BY 'id'");
        $linhas = mysqli_num_rows($ponto);

        $ponto2 = mysqli_query($conecta, "SELECT * FROM ponto ORDER BY 'id'");
        $linhas2 = mysqli_num_rows($ponto2);
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Carona Utfpr</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header>

    

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container"><br/>
        <h2 class="text-center">Adicionar Carona</h2><br/>
	        <div class="row">
	          <div class="col-lg-8 mx-auto">

				  <form method="POST" action="processa/cadastroRota.php">
                  <p>Origem</p>
                  <select class="form-control" name="origem">
                  <?php
                    while($linhas = mysqli_fetch_array($ponto)){
                      echo utf8_encode("<option value=\"".$linhas['id']."\">".$linhas['nomePonto']."</option>");
                    }
                  ?>
                  </select>

                  <p>Destino</p>
                  <select class="form-control" name="destino">
                  <?php
                    while($linhas2 = mysqli_fetch_array($ponto2)){
                      echo utf8_encode("<option value=\"".$linhas2['id']."\">".$linhas2['nomePonto']."</option>");
                    }
                  ?>
                  </select>

                <p>Número de Vagas</p>
                <select name="nroVagas">
	                <option value="1">1</option>
	                <option value="2">2</option>
	                <option value="3">3</option>
	                <option value="4">4</option>
	            </select>

              <p>Data/Horário</p>
              <input type="datetime-local" name="dataHorario">
              <div style="text-align: center !important"><br/>
              <button class="btn btn-success" type="submit" data-dismiss="modal"> <i class="fa fa-automobile"></i> Oferecer Carona</button>
              <a href="select.php"><button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa-times"></i> Cancelar</button></a>
              <a href=""><button class="btn btn-success" type="button" data-dismiss="modal"> <i class="fa fa fa-list"></i> Suas Caronas</button></a>
              </div>
				  </form>
	          </div>
	        </div>
      </div>
    </section>

    </header>


    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Disciplina</h3>
              <p>Programação de Aplicativos
                <br>Profº Rafael Liberato</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Repositório</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://github.com/allisonsampaio/carona-utfpr">
                    <i class="fa fa-fw fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Projeto</h3>
              <p>Allison Sampaio
                <br>Lucas Donadi</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Carona UTFPR 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
