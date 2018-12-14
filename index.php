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
        include('functions.php');
        $res = getRestaurants(isset($_REQUEST['q'])?$_REQUEST['q']:"");
            /* Condicion ? Caso Sí: Caso No
          */
    ?>
        <!-- Aqui empieza el codigo HTML donde empieza nuestra pagina-->
    <div id="cab" class="jumbotron text-center" style="margin-bottom:0">
        <img  src="img/ico.png" alt="Logo image" > 
    </div>
    <nav class="navbar navbar-expand-sm bg-white navbar-white">
        <form class="form-inline" method="get">
            <input class="form-control mr-sm-2" type="text" name="q" value="<?= (isset($_REQUEST['q'])?$_REQUEST['q']:"")?>" placeholder="Introducir Busqueda">
            <select name="o" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                <option value="1">Ascendente</option>
                <option value="2">Descendente</option>
            </select>
            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Recordar mi seleccion</span>
            </label>
            <button class="btn" type="submit">Busqeda</button>
        </form>
    </nav>
    <br>

    <?php
    /*Definimos un bucle for para iterar las cards con la informacion de la Array */
        for ($num=0; $num<count($res); $num++):
    /*Definimos un bucle if para abrir y cerrar las columnas cuando aga falta (cada 2 cards) */
            if ($num%2==0):
    ?>
                <div class="row">
    <?php
            endif;
    ?>
                    <div class=' col-sm-12 col-md-12 col-lg-6'>  
                        <div class="card" style="width:400px">
                        <div class="card-header"><?= $res[$num]["Mode"] ?></div>
                            <img class="card-img-top" src="<?= $res[$num]["Img"] ?>" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $res[$num]["Name"] ?></h4>
                                    <p class="card-text"><?= $res[$num]["Coment"] ?></p>
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
                                                        <td>Location</td>
                                                        <td><?= $res[$num]["City"] ?>; <?= $res[$num]["Street"] ?>; Nº <?= $res[$num]["Numero"] ?>; CP: <?= $res[$num]["CP"] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone Number</td>
                                                        <td><?= $res[$num]["TelfNumber"] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                        </div>
                        <br>  
                    </div>
    <?php
    /*Abrimos el bucle IF  que cierra las cards cada 2 cards */
            if ($num%2==1):
    ?>
                </div>
    <?php
            endif;
        endfor;
    ?>
        </div>
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