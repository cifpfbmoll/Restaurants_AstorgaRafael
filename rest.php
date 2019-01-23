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
        $res = getRestaurant($_REQUEST['id']);
            
    ?>
        <!-- Aqui empieza el codigo HTML donde empieza nuestra pagina-->
    <div id="cab" class="jumbotron text-center" style="margin-bottom:0">
        <img  src="img/ico.png" alt="Logo image" > 
    </div>
    <br>
        <button type="submit" class="btn outline-success">
                    <a href="https://serveriaw.iesfbmoll.org/~rastorga/">Main Page</a>
                </button>
        
            <div class="jumbotron">
<!-- Aqui se define una carta con el contenido de la informacion del resturante traido de la base de datos -->
                <div class="card" >
                        <div class="card-header"> <?= $res["name"] ?></div>
                            <img class="card-img-top" src="<?= $res["filePath"] ?>" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title"> <?= $res["name"] ?></h4>
                                    <p class="card-text"><?= $res["description"] ?></p>
                                    <p class="card-text"><?= $res["phoneNumber"] ?></p>
                                    <p class="card-text"><a href=" <?= $res["website"] ?>"> <?= $res["website"] ?> </a></p>
                                    <?= $res["gMap"] ?>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo<?= $num?>">More Info +</button>
                                        <div id="demo<?= $num?>" class="collapse">
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
                                        </div>
                                </div>
                        </div>
            </div>
        <?php 

      
      ?>
        <br>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Copyright by Raphista 2018</p>   
        </div>


        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

  </body>
</html>