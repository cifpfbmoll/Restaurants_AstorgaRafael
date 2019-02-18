<!doctype html>
<html lang="en">
<!-- En esta pagina Se muestra el restarurante seleccionado en la pagina index.php -->
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
    <!-- En esta pagina Se muestra el restarurante seleccionado en la pagina index.php -->
        <?php
            /*Incluimos el fichero con funciones y llamamos a la funcion que tenemos que usar */
            include('functions.php');
            if (isset($_POST['commentinsert-submit'])) {
                putComment($_REQUEST['commentinsert'], $_REQUEST['id']);
            };
            $res = getRestaurant($_REQUEST['id']);
            $com = dropComment($_REQUEST['id']);
        ?>
<!-- Aqui empieza el codigo HTML donde empieza nuestra pagina-->
        <div id="cab" class="jumbotron text-center" style="margin-bottom:0">
            <img  src="img/ico.png" alt="Logo image" > 
        </div>
        <br>
        <a href="https://serveriaw.iesfbmoll.org/~rastorga/"><button type="button" class="btn outline-success">
            Main Page
        </button></a>
        <div class="row">
            <div id="rest" class="col-sm-8">
        <!-- Aqui se define una carta con el contenido de la informacion del resturante traido de la base de datos -->
                <h1> <?= $res["name"] ?></h1>
                <img class="card-img-top" src="<?= $res["filePath"] ?>" alt="Card image">
                <h4 class="card-title"> <?= $res["name"] ?></h4>
                <p class="card-text"><?= $res["description"] ?></p>
                <p class="card-text"><?= $res["phoneNumber"] ?></p>
                <p class="card-text"><a href=" <?= $res["website"] ?>"> <?= $res["website"] ?> </a></p>
                <?= $res["gMap"] ?>
                <br>
                <table class="table table-hover">
                    <thead class="thead-dark">    
                        <tr>
                            <th>Current </th>
                            <th> Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>openingHours</td>
                            <td><?= $value["openingHours"] ?></td>
                        </tr>
                        <tr>
                            <td>priceCategory</td>
                            <td><?= $res["priceCategory"] ?></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><?= $res["email"] ?></td>
                        </tr>
                        <tr>
                            <td>rating</td>
                            <td><?= $res["rating"] ?></td>
                        </tr>
                        <tr>
                            <td>Is Trending</td>
                            <td><?= $res["isTrending"] ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="footer-copyright text-center py-3">© 2019 Copyright by Raphista.</div>
            </div>
        </div>
        <div class="col-sm-4">
            <form class="form-inline" action="rest.php?id=<?= $_REQUEST["id"] ?>" method="post">    
                <input type="hidden" name="id" value="<?= $_REQUEST['id'] ?>"/>                
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" name="commentinsert" id="comment"></textarea>
        </div>
                <button type="submit" name="commentinsert-submit" class="btn outline-success">Post comment</button>
            </form>
        </div>
        <div class="col">
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <?php
                        foreach ($com as $key => $value) {
                    ?>
                        <!--Aqui se define la estructura de cada carta de restarurante inluye valores llamados de la base de datos-->
                    <div class="card">
                        <div class="card-body">
                            <h6>Numero de restaurante <?= $value["restaurantId"] ?> </h6>
                            <h6>comentario de el usuario: <?= $value["userId"] ?> </h6>
                            <p> <?= $value["comment"] ?> </p>
                            <h6>fecha de posteo:<?= $value["dateTime"] ?></h6>                        
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        <div class="col"></div>
    </div> <!-- div del row -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>