<!doctype html>
<html lang="en">
    <head>
        <title>TAKE MY WALLET & FEED ME HOE</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <?php
        /*Incluimos el fichero con funciones y llamamos a la funcion que tenemos que usar */
            include('functions.php');
            session_start();
            $res = getRestaurants(isset($_GET['q']) ? $_GET['q'] : "");
        ?>
        <!-- Aqui empieza el codigo HTML donde empieza nuestra pagina-->
        <div id="cab" class="jumbotron text-center" style="margin-bottom:0">
            <img src="img/ico.png" alt="Logo image"> 
        </div>
        <nav class="navbar navbar-expand-sm bg-white navbar-white">
        <!--Aqui se plantea la parte de formulario en la que se introduce la busqueda de texto para restaurante y como ordernarlos, se plantea un
        IF en cada opcion para que el valor sea el mismo que tenias en la busqueda cuando as pulsado el boton-->
            <form class="form-inline" method="get">
                <input class="form-control mr-sm-2" type="text" name="q" value="<?= (isset($_GET['q']) ? $_GET['q'] : "") ?>" placeholder="Introducir Busqueda">
                <select name="o" class="custom-select mb-2 mr-sm-2 mb-sm-0"  id="inlineFormCustomSelect">
                    <option value="1" <?= (isset($_GET['o']) && $_GET['o'] == 2 ? '' : 'selected') ?>>Ascendente</option>
                    <option value="2" <?= (isset($_GET['o']) && $_GET['o'] == 2 ? 'selected' : '') ?>>Descendente</option>
                </select>
                <button class="btn" type="submit">Busqeda</button>
                <?php
                /*fILTRO QUE DETECTA SI ESTAS O NO LOGUEADO Y CAMBIA LOS BOTONES EN FUNCION A ELLO */
                    if ($_SESSION['log'] == 'okay'):
                        ?>
                            <a href="logout.php"><button type="button" class="btn btn-warning">LOGOUT</button></a>
                            <h4>Hola <?= $_SESSION['user'] ?> </h4>
                        <?php 
                    else:
                        ?>
                            <a href="login.php"><button type="button" class="btn btn-warning">LOGIN</button></a>   
                            <a href="reg.php"><button type="button" class="btn btn-warning">REGISTRATION</button></a>
                        <?php
                    endif;
                ?>      
            </form>
        </nav>
    <br>
    <?php
        /*Definimos un bucle for para iterar las cards con la informacion de la Array */
        foreach ($res as $key => $value) {
    ?>
    <!--Aqui se define la estructura de cada carta de restarurante inluye valores llamados de la base de datos-->
    <div class="well">
        <h1> <?= $value["name"] ?></h1>
        <img  src="<?= $value["filePath"] ?>" alt="Logo image">
        <p><?= $value["description"] ?></p>
        <h3><a href="<?= $value["phoneNumber"] ?>"><?= $value["phoneNumber"] ?> </a> </h3>
        <h4><a href="<?= $value["website"] ?>"><?= $value["website"] ?> </a></h4>
        <!-- Boton para llamar a la pagina rest.php con la id del restaurante seleccionado -->
        <a href="rest.php?id=<?= $value["id"] ?>"><button type="submit" class="btn outline-success">
            Restaurant info +
        </button></a>
    </div>
    <?php 
        }
    ?>
<br>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
    <footer class="page-footer font-small stylish-color-dark pt-4">
        <div class="footer-copyright text-center py-3">© 2019 Copyright by Raphista.</div>
    </footer>
</html>