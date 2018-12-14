<?php

            // =============================================
            
            /*Definimos una funcion que almacena la array */
        function getRestaurants($que) {
            $array= array
            (
                /* Name-City-Street-Number-CP-TelfNumber-Picture */
            array(  "Name"=>"RESTAURANTE SERRANO",
                    "City"=>"Astorga",
                    "Street"=>"Calle Porteria",
                    "Coment"=>"Muy acogedor, con una carta muy apetecible, nos atendieron estupendamente, con mucha profesionalidad y los platos que pedimos estaban muy bien preparados",
                    "Numero"=>2,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 78 66",
                    "Img"=>"https://static2.leonoticias.com/www/multimedia/201804/07/media/cortadas/facahada_475px-k6Z-U501539834550BIB-624x385@Leonoticias.jpg",
                    "Mode"=>"Restaurante",
                ),

            array(  "Name"=>"JUAN LUIS",
                    "City"=>"Astorga",
                    "Street"=>"Calle San Pedro",
                    "Coment"=>"Está a unos 5 minutos andando de la catedral, merece la pena el paseo. El restaurante está limpísimo con vajilla y cubiertos de mucha calidad y mantelería toda de paño. Las dos chicas que nos atendieron súper amables y atentas, de 10.",
                    "Numero"=>49,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 90 27",
                    "Img"=>"https://i0.wp.com/www.eljaponeserrante.com/wp-content/uploads/2018/05/mesonJuanLuis.jpg?fit=1200%2C674&ssl=1",
                    "Mode"=>"Bar",
                ),

            array(  "Name"=>"PARRILLADA BARDAL",
                    "City"=>"Astorga",
                    "Street"=>"Calle Pradorrey",
                    "Coment"=>"Ensalada bien , chuleton excelente, vino del bierzo rico , postres caseros del 10 .... Justiprecio ! Amables , con cariño .... Me lo recomendó ",
                    "Numero"=>2,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 60 65 55",
                    "Img"=>"https://u.tfstatic.com/restaurant_photos/873/387873/169/612/parrillada-asador-monterrey-sugerencia-carne-55b6b.jpg",
                    "Mode"=>"Restaurante",
                ),

            array(  "Name"=>"LA PESETA",
                    "City"=>"Astorga",
                    "Street"=>"Plaza San Bartolome",
                    "Coment"=>"Qué gran recomendación nos hicieron. Merece la pena acudir y probar su excelente gastronomía. El cogote de merluza al horno,...y todo ello con un vino de El Bierzo... Genial.",
                    "Numero"=>3,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 72 75",
                    "Img"=>"https://s-ec.bstatic.com/images/hotel/max1024x768/592/5922204.jpg",
                    "Mode"=>"Bar",
                ),

            array(  "Name"=>"LA BERCIANA",
                    "City"=>"Astorga",
                    "Street"=>"Calle Magin Garcia Revillo",
                    "Coment"=>"Pese a las opiniones, decidimos entrar. Un gran acierto¡¡¡ muy buena atención y deliciosa comida, alejada de los 23 €/persona que ofrecían otros establecimientos por el maragato; pese a que es menos cantidad mas que suficiente. Recomendado 100 % calidad precio.",
                    "Numero"=>4,
                    "CP"=>24700,
                    "TelfNumber"=>"+34 987 61 84 65",
                    "Img"=>"https://tabernaberciana.com/wp-content/uploads/2014/09/IMG_2485.jpg",
                    "Mode"=>"Restaurante",
                ),
            );
            // $result
            // foreach de $array
            // si cumple condicion añadir $array[i] a $result
            // devolver $resu
            if (!empty($que)){
                $resultado = [];
                foreach($array as $key => $value ){
                    if(strpos(strtoupper($value["Name"]),strtoupper($que))!==FALSE){
                        $resultado[] = $value;
                    }
                }
            }
            if($_REQUEST['o']==1){
                SORT($resultado);
                return $resultado;
            }elseif($_REQUEST['o']==2){
                RSORT($resultado);
                return $resultado;
            }elseif(empty($que)){
                return $array;
            }
        }
        

        /* 
Buscador
        $code=35;

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
foreach($age as $key => $value) {
  if ($value==$code){
    echo "Key=" . $key . ", Value=" . $value."<br>";
    } elseif ($value!==$code){
    echo " ";
    } else {
      echo " n";
    }
}
*/
?>