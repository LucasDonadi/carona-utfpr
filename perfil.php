<?php
session_start();
include_once("conexao.php");

$result = mysqli_query($conecta, "SELECT * FROM usuario WHERE id = '$_SESSION[usuarioId]' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);

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


  </head>

  <body id="page-top">

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
<br/><br/><br/><br/>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <div class="text-center"><i class="fa fa-user-circle-o fa-5x"></i></div>
        <h2 class="text-center"><?php echo $_SESSION['usuarioNome'] ?></h2><br/><br/>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body">
            <form method="POST" action="processa/alteraUsuario.php">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Nome</label>
                    <input class="form-control" name="nome" type="text" placeholder="Digite seu nome" value="<?php echo $_SESSION['usuarioNome'] ?>">
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>R.A</label>
                    <input class="form-control" name="id" type="text" placeholder="R.A" value="<?php echo $_SESSION['usuarioId'] ?>">
                  </div>
                </div>

                
                <select clas="form-control" name="curso">
                    <option value="<?php echo $_SESSION['usuarioCurso'] ?>"><?php echo $_SESSION['usuarioCurso'] ?></option>
                    <option value="Ciência da Computação">Ciência da Computação</option>
                    <option value="Licenciatura em Química">Licenciatura em Química</option>
                    <option value="Engenharia Civil">Engenharia Civil</option>
                    <option value="Engenharia Eletrônica">Engenharia Eletrônica</option>
                    <option value="Engenharia de Alimentos">Engenharia de Alimentos</option>
                    <option value="Engenharia Ambiental">Engenharia Ambiental</option>
                    <option value="Técnico">Técnico</option>
                </select>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>E-mail</label>
                    <input class="form-control" name="email" type="text" placeholder="E-mail" value="<?php echo $_SESSION['usuarioEmail'] ?>">
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Senha</label>
                    <input class="form-control" name="senha" type="password" placeholder="Senha" value="<?php echo $_SESSION['usuarioSenha'] ?>">
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Veículo</label>
                    <input class="form-control" name="veiculo" type="text" placeholder="Veículo" value="<?php echo $_SESSION['usuarioVeiculo'] ?>">
                  </div>
                </div>

                <br>
                <div id="success"></div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg">Editar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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