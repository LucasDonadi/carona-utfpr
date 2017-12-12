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

        $resultado = mysqli_query($conecta, "SELECT * FROM rota WHERE idCondutor = $idUsuario ORDER BY 'id'");
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
        <h2 class="text-center">Suas Caronas</h2><br/>
	        <div class="row">
	          <div class="col-md-12">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Origem</th>
                        <th>Destino</th>
                        <th>Data/Horário</th>
                        <th>Vagas Disponíveis</th>
                        <th>Passageiros</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($linhas = mysqli_fetch_array($resultado)){
                      echo "<tr>";
                      echo utf8_encode("<td>".$linhas['id']."</td>");
                       if($linhas['idOrigem']=='1'){
                          echo "<td>UTFPR</td>";
                        }else if($linhas['idOrigem']=='2'){
                          echo "<td>Terminal</td>";
                        }

                        if($linhas['idDestino']=='1'){
                          echo "<td>UTFPR</td>";
                        }else if($linhas['idDestino']=='2'){
                          echo "<td>Terminal</td>";
                        }
                      echo utf8_encode("<td>".$linhas['dataHorario']."</td>");
                      echo utf8_encode("<td>".$linhas['nroVagas']."</td>");
                      echo utf8_encode("<td>");

                      $idRota = $linhas['id'];

                      $resultado2 = mysqli_query($conecta,"SELECT * FROM carona, usuario WHERE carona.idRota = $idRota AND usuario.id = carona.idUsuario AND status = '0'");
                      $linhas2 = mysqli_num_rows($resultado2);

                      while($linhas2 = mysqli_fetch_array($resultado2)){
                        echo"  <div class=\"dropdown\">
                                <div class=\"dropup\" text-center>
                                <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" style=\"margin-bottom: 2px;\">".$linhas2['nome']."
                                <span class=\"caret\"></span></button>
                                <ul class=\"dropdown-menu\">
                                  <li>ID:".$linhas2['id']."</li>
                                  <li>Nome: ".$linhas2['nome']."</li>
                                  <li>E-mail: ".$linhas2['email']."</li>
                                  <li>Curso: ".$linhas2['curso']."</li>
                                  <li><a href=\"processa/aceitar.php?idCarona=".$linhas['id']."\"><button type=\"button\" class=\"btn btn-primary\">Aceitar</button></a></li>
                                  <li><a href=\"processa/recusar.php?idCarona=".$linhas['id']."\"><button type=\"button\" class=\"btn btn-primary\">Recusar</button></a></li>
                                </ul>
                              </div>
                              </div>";
                    }
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                  </table>
              
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
