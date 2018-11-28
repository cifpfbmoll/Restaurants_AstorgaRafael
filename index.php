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
        /*
            $array= array
            (
                Name-City-Street-Number-CP-TelfNumber-Picture 
            array("Restaurante Serrano","Astorga","Calle Porteria","Muy acogedor, con una carta muy apetecible, nos atendieron estupendamente, con mucha profesionalidad y los platos que pedimos estaban muy bien preparados",2,24700,"+34 987 61 78 66","https://static2.leonoticias.com/www/multimedia/201804/07/media/cortadas/facahada_475px-k6Z-U501539834550BIB-624x385@Leonoticias.jpg"),
            array("Juan Luis","Astorga","Calle San Pedro","Está a unos 5 minutos andando de la catedral, merece la pena el paseo. El restaurante está limpísimo con vajilla y cubiertos de mucha calidad y mantelería toda de paño. Las dos chicas que nos atendieron súper amables y atentas, de 10.",49,24700,"+34 987 61 90 27","https://i0.wp.com/www.eljaponeserrante.com/wp-content/uploads/2018/05/mesonJuanLuis.jpg?fit=1200%2C674&ssl=1"),
            array("Restaurante Parrillada Bardal","Astorga","Calle Pradorrey","Ensalada bien , chuleton excelente, vino del bierzo rico , postres caseros del 10 .... Justiprecio ! Amables , con cariño .... Me lo recomendó ",2,24700,"+34 987 60 65 55","https://u.tfstatic.com/restaurant_photos/873/387873/169/612/parrillada-asador-monterrey-sugerencia-carne-55b6b.jpg"),
            array("La Peseta Restaurante","Astorga","Plaza San Bartolome","Qué gran recomendación nos hicieron. Merece la pena acudir y probar su excelente gastronomía. El cogote de merluza al horno,...y todo ello con un vino de El Bierzo... Genial.",3,24700,"+34 987 61 72 75","https://s-ec.bstatic.com/images/hotel/max1024x768/592/5922204.jpg"),
            array("Restaurante La Berciana","Astorga","Calle Magin Garcia Revillo","Pese a las opiniones, decidimos entrar. Un gran acierto¡¡¡ muy buena atención y deliciosa comida, alejada de los 23 €/persona que ofrecían otros establecimientos por el maragato; pese a que es menos cantidad mas que suficiente. Recomendado 100 % calidad precio.",4,24700,"+34 987 61 84 65","https://tabernaberciana.com/wp-content/uploads/2014/09/IMG_2485.jpg")
            );

            function getRestaurants() {
                global $array;
                return $array;
            }

            $res = getRestaurants();
                */
            // =============================================
            
            /*Definimos una funcion que almacena la array */
        function getRestaurants() {
            $array= array
            (
                /* Name-City-Street-Number-CP-TelfNumber-Picture */
            array(  "Name"=>"Restaurante Serrano",
                    "City"=>"Astorga",
                    "Street"=>"Calle Porteria",
                    "Coment"=>"Muy acogedor, con una carta muy apetecible, nos atendieron estupendamente, con mucha profesionalidad y los platos que pedimos estaban muy bien preparados",
                    "Numero"=>2,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 78 66","Img"=>"https://static2.leonoticias.com/www/multimedia/201804/07/media/cortadas/facahada_475px-k6Z-U501539834550BIB-624x385@Leonoticias.jpg"),

            array(  "Name"=>"Juan Luis",
                    "City"=>"Astorga",
                    "Street"=>"Calle San Pedro",
                    "Coment"=>"Está a unos 5 minutos andando de la catedral, merece la pena el paseo. El restaurante está limpísimo con vajilla y cubiertos de mucha calidad y mantelería toda de paño. Las dos chicas que nos atendieron súper amables y atentas, de 10.",
                    "Numero"=>49,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 90 27",
                    "Img"=>"https://i0.wp.com/www.eljaponeserrante.com/wp-content/uploads/2018/05/mesonJuanLuis.jpg?fit=1200%2C674&ssl=1"),

            array(  "Name"=>"Restaurante Parrillada Bardal",
                    "City"=>"Astorga",
                    "Street"=>"Calle Pradorrey",
                    "Coment"=>"Ensalada bien , chuleton excelente, vino del bierzo rico , postres caseros del 10 .... Justiprecio ! Amables , con cariño .... Me lo recomendó ",
                    "Numero"=>2,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 60 65 55","Img"=>"https://u.tfstatic.com/restaurant_photos/873/387873/169/612/parrillada-asador-monterrey-sugerencia-carne-55b6b.jpg"),

            array(  "Name"=>"La Peseta Restaurante",
                    "City"=>"Astorga",
                    "Street"=>"Plaza San Bartolome",
                    "Coment"=>"Qué gran recomendación nos hicieron. Merece la pena acudir y probar su excelente gastronomía. El cogote de merluza al horno,...y todo ello con un vino de El Bierzo... Genial.",
                    "Numero"=>3,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 72 75",
                    "Img"=>"https://s-ec.bstatic.com/images/hotel/max1024x768/592/5922204.jpg"),

            array(  "Name"=>"Restaurante La Berciana",
                    "City"=>"Astorga",
                    "Street"=>"Calle Magin Garcia Revillo",
                    "Coment"=>"Pese a las opiniones, decidimos entrar. Un gran acierto¡¡¡ muy buena atención y deliciosa comida, alejada de los 23 €/persona que ofrecían otros establecimientos por el maragato; pese a que es menos cantidad mas que suficiente. Recomendado 100 % calidad precio.",
                    "Numero"=>4,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 84 65",
                    "Img"=>"https://tabernaberciana.com/wp-content/uploads/2014/09/IMG_2485.jpg")
            );
            
            return $array;
        }

        $res = getRestaurants();
    ?>
        <!-- Aqui empieza el codigo HTML donde empieza nuestra pagina-->
    <div class="jumbotron text-center" style="margin-bottom:0">
        <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxfyGAbkC94TOr1uwuW9uwLJX_zWTuHZXLyI6bYKQlDMvSXEdbjA" alt="Logo image" >
        <h2>Restaurants</h2>    
    </div>
    <br>
    <br>

    <?php
    /*Definimos un bucle for para iterar las cards con la informacion de la Array */
        for ($num=0; $num<5; $num++):
    /*Definimos un bucle if para abrir y cerrar las columnas cuando aga falta (cada 2 cards) */
            if ($num%2==0):
    ?>
                <div class="row">
    <?php
            endif;
    ?>
                    <div class=' col-sm-12 col-md-12 col-lg-6'>  
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="<?= $res[$num]["Img"] ?>" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $res[$num]["Name"] ?></h4>
                                    <p class="card-text"><?= $res[$num]["Coment"] ?></p>
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