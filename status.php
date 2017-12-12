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

        $idUsuario = $_SESSION['usuarioId'];
        $resultado = mysqli_query($conecta, "SELECT * FROM carona WHERE idUsuario = $idUsuario ORDER BY 'id'");
        $linhas = mysqli_num_rows($resultado);
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
        <h2 class="text-center">Minhas Solicitações</h2><br/>
	        <div class="row">
	          <div class="col-md-12">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Rota</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <?php
                      while($linhas = mysqli_fetch_array($resultado)){
                        echo "<tr>";
                        echo utf8_encode("<td>".$linhas['id']."</td>");
                        echo utf8_encode("<td>".$linhas['idRota']."</td>");
                        if($linhas['status']==0){
                          echo utf8_encode("<td>Aguardando confirmacao de carona.</td>");
                        }else if($linhas['status']==1){
                          echo utf8_encode("<td>Carona aceita!</td>");
                        }else if($linhas['status']==2){
                          echo utf8_encode("<td>Carona recusada!</td>");
                        }
                        echo "</tr>";
                      }
                      ?>
                      </tr>
                    </tbody>
                  </table>

                  <div class="text-center">
                    <a href="list.php"><button type="button" class="btn btn-success"> <i class="fa fa fa-list"></i> Caronas Disponíveis</button></a>
                    <a href="list.php"><button type="button" class="btn btn-success"> <i class="fa fa-times"></i> Voltar</button></a>
                  </div>

	          </div>
	        </div>
      </div><br>
      <div class="text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.6300512755083!2d-52.37945428541934!3d-24.044107585480397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed7538d4c87517%3A0xf6fde7bc0a761f06!2sCatedral+S%C3%A3o+Jos%C3%A9+de+Campo+Mour%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1510935718285" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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
