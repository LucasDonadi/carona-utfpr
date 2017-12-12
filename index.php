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

    <!-- AngularJS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

	<!-- Firebase -->
	<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

	<!-- AngularFire -->
	<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>


  </head>

  <body id="page-top" ng-app="carona-utf">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Carona Utfpr</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal" style="color: #fff !important">Login</a>
              <a class="portfolio-link" href="" data-toggle="modal" style="color: #fff !important"> /</a>
              <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal" style="color: #fff !important">Cadastrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <i class="fa fa-car"></i>
        <div class="intro-text">
          <span class="name">Carona Utfpr</span>
          <span class="skills">Ofereça ou solicite caronas perto de você de forma instantânea.</span>
        </div>
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
              Copyright &copy; 2017<br/>
		Freelance - open source Bootstrap theme created by Start Bootstrap
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

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-5 mx-auto">
                <div class="modal-body">
                <h2 class="text-center">Login</h2><br/><br/><br/>

                  <form class="form-signin" method="POST" action="validaLogin.php">
                    <label class="sr-only">R.A</label>
                    <input type="text" name="id" class="form-control" placeholder="R.A" required autofocus><br/>
                    <label class="sr-only">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required><br/>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="remember-me"> Lembrar identificação de usuário
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
                  </form>

                  <p class="text-center text-danger">
                    <?php
                      if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                      }
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                <h2 class="text-center">Cadastro</h2>

              <form method="POST" action="processa/cadastroUsuario.php">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Nome</label>
                    <input class="form-control" name="nome" type="text" placeholder="Digite seu nome">
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>R.A</label>
                    <input class="form-control" name="id" type="text" placeholder="R.A">
                  </div>
                </div>

                
                <select clas="form-control" name="curso">
                    <option value="default">Curso</option>
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
                    <input class="form-control" name="email" type="text" placeholder="E-mail">
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Senha</label>
                    <input class="form-control" name="senha" type="password" placeholder="Senha">
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Veículo</label>
                    <input class="form-control" name="veiculo" type="text" placeholder="Veículo">
                  </div>
                </div>

                <br>
                <div id="success"></div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg" href>Cadastrar</button>
                </div>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="https://www.gstatic.com/firebasejs/4.5.2/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyCedGFG0e9AgiX1PeQN9E3AdPqQa5fxVXc",
      authDomain: "carona-utfpr.firebaseapp.com",
      databaseURL: "https://carona-utfpr.firebaseio.com",
      projectId: "carona-utfpr",
      storageBucket: "carona-utfpr.appspot.com",
      messagingSenderId: "196338540140"
    };
    firebase.initializeApp(config);
  </script>

  <!-- Leave out Storage -->
  <!-- <script src="/__/firebase/4.2.0/firebase-storage.js"></script> -->

  <script src="/__/firebase/init.js"></script>

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
