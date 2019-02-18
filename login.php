<!--You must create a login.php page, that shows a form, asking for a username and a password. With the POST method you have to read this parameters, and query the database searching this user. If this username and password are correct, you have to store the necessary information into sessions variables and return to the index.php page.
You must also create a logout.php page to remove all session information from this user.
-->
<!doctype html>
<html lang="en">
  <head>
    <title>TAKE MY WALLET & FEED ME HOE</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/log.css">
  </head>
  <body>
  <?php
  /*iNCLUIMOS LAS FUNCIONES Y MIRAMOS SI SE HA PULSADO EL BOTON DE LOGUIN; SI SE HA PULSADO ENVIAMOS LA INFO A LA FUNCION */
    include('functions.php');
    if(isset($_POST['logbut'])){
      login($_REQUEST['user'],$_REQUEST['password']);
    };
  ?>
  <?php
  /*FILTRO QUE OBSERVA LAS VARIABLES DE SESSION PARA INFORMAR AL USUARIO DEL ESTADO DE SU SESION */
    if($_SESSION['log']=='uswr'):
      echo "<script type='text/javascript'>alert('Usuario Incorrecto');</script>";
      session_destroy();
    elseif($_SESSION['log']=='pswr'):
      echo "<script type='text/javascript'>alert('Contraseña Incorrecta');</script>";
      session_destroy();
    else:
    endif;
  ?>
  <!--ESTRUCTURA DE LA PAGINA-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" action="login.php"  method="post">
                <div class="form-group">
                <label for="usr">User:</label>
                <input type="text" class="form-control" id="usr"  name="user" Required>
                </div>
                <div class="form-group">
                <label for="usr">Password:</label>
                <input type="text" class="form-control" id="usr"  name="password" Required>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase" name="logbut" type="submit">Sign in</button>
                </form>
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                <br>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
              <hr class="my-4">
              <a href="index.php"><button class="btn btn-lg btn-google btn-block text-uppercase" ><i class="fab fa-google mr-2"></i>Volver a la pagina principal</button></a>
              <br>
              <a href="reg.php"><button class="btn btn-lg btn-facebook btn-block text-uppercase" ><i class="fab fa-facebook-f mr-2"></i> Ir a la pagina de Registro </button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>