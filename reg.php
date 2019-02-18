
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
    /*Incluimos el fichero con funciones y ENVIAMOS ALA FUNCION REGISTRO LOS DATOS*/
    include('functions.php');
    if(isset($_POST['butreg'])){
      register($_REQUEST['user'],$_REQUEST['name'],$_REQUEST['surna'],$_REQUEST['email'],$_REQUEST['password']);
    };
    /*VARIABLES DE SESSION QUE DEVUELVEN INFORMACION UTIL AL USUARIO PARA SU REGISTRO */
    if ($_SESSION["regis"] == 'dupli'):
      echo "<script type='text/javascript'>alert('Usuario Duplicado');</script>";
      session_destroy();
    elseif($_SESSION["regis"] == 'nop'):
      echo "<script type='text/javascript'>alert('Registro Incorrecto');</script>";
      session_destroy();
    elseif($_SESSION["regis"] == 'okay'):
      echo "<script type='text/javascript'>alert('Registro Correcto; Redirigiendote a la pagina de login');</script>";
      session_destroy();  
      header('Location: login.php');
    else:
    endif;
  ?>
  <!-- ESTE ES EL CUERPO DE LA PAGINA -->
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">REGISTRATION</h5>
                <form class="form-signin" method="post">
                    <div class="form-group">
                    <label for="usr">User:</label>
                    <input type="text" class="form-control" id="usr"  name="user" Required>
                    </div>
                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input type="text" class="form-control" id="usr"  name="name" Required>
                    </div> 
                    <div class="form-group">
                      <label for="usr">Surname:</label>
                      <input type="text" class="form-control" id="usr"  name="surna" Required>
                    </div>
                    <div class="form-group">
                      <label for="usr">Email:</label>
                      <input type="text" class="form-control" id="usr"  name="email" Required>
                    </div>
                    <div class="form-group">
                      <label for="usr">Password:</label>
                      <input type="text" class="form-control" id="usr"  name="password" Required>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" name="butreg" type="submit">register</button>
                    </form>
                  <hr class="my-4">
                  <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> register with Google</button>
                  <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> register with Facebook</button>  
                <hr class="my-4">
                <a href="index.php"><button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i>Volver a la pagina principal</button></a>
                <br>
                <a href="login.php"><button class="btn btn-lg btn-facebook btn-block text-uppercase" ><i class="fab fa-facebook-f mr-2"></i>Continuar a la pagina de login</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>