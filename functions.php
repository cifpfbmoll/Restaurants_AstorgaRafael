<?php

/*Esta es una pagina de funciones en .php

Llamamos al fichero que almacena la conexion con la base de datos*/
require_once "connection.php";
            // =============================================
            
            /*Definimos una funcion que almacena el resultado de la busqeda en la abse de datos */
        function getRestaurants($que){
                global $db;
                $data=[];
                $sql = "SELECT `Restaurant`.`id`, `name`, `description`, `openingHours`, `priceCategory`, 
                `locality`, `route`, `streetNumber`, `postalCode`, `latitude`, `longitude`, `phoneNumber`, 
                `website`, `email`, `rating`, `isTrending`, `gMap`, `filePath` 
                FROM `Restaurant` INNER JOIN `Image` on `Restaurant`.`id` = `Image`.`id`";
                $result = mysqli_query($db, $sql) or die(mysqli_error($db));	// Podriem llegir tambe $result->num_rows


                $data = NULL;
                
                $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
              
                mysqli_free_result($result);
                mysqli_close($db);

                        /*Creo un bucle para la busqueda de elementos */
                                                        if (!empty($que)){
                                                            $sele=[];
                                                            foreach($data as $key => $value ){
                                                                if(strpos(strtoupper($value["name"]),strtoupper($que))!==FALSE){
                                                                    $sele[] = $value;
                                                                }
                                                            }
                                                        
                                                }
                                                

                                                    /* Creo un filtro para devolver el resultado en distinto orden */
                                                        if (!empty($_REQUEST['o'])&&!empty($que)){  
                                                        if($_REQUEST['o']==1){
                                                            SORT($sele);
                                                            return $sele;
                                                        }elseif($_REQUEST['o']==2){
                                                            RSORT($sele);
                                                            return $sele;
                                                        }
                                                        }elseif(empty($que)&&($_REQUEST['o']==1)){
                                                                SORT($data);
                                                                return  $data;
                                                            }elseif(empty($que)&&($_REQUEST['o']==2)){
                                                                RSORT($data);
                                                                return  $data;
                                                            }else{
                                                                SORT($data);
                                                                return  $data;
                                                            }
                                                        
                                                     }
                            /* Definimos una funcion que llama a los valores de sql segun la id de restaurante que hemos seleccionado en la pagina
                            Index.php, esta funcion es para la pagina rest.php  */
            function getRestaurant($id){
                global $db;
                $sql = "SELECT `Restaurant`.`id`, `name`, `description`, `openingHours`, `priceCategory`, 
                `locality`, `route`, `streetNumber`, `postalCode`, `latitude`, `longitude`, `phoneNumber`, 
                `website`, `email`, `rating`, `isTrending`, `gMap`, `filePath` 
                FROM `Restaurant` INNER JOIN `Image` on `Restaurant`.`id` = `Image`.`id` WHERE `Restaurant`.`id` = $id";
                $result = mysqli_query($db, $sql) or die(mysqli_error($db));	// Podriem llegir tambe $result->num_rows
                
                $data = NULL;
                $data= mysqli_fetch_assoc($result);
                
                mysqli_free_result($result);
                return $data;
            }

            function putComment($commentinsert, $id){
                global $db;
                $sql = "INSERT INTO Comment (comment, dateTime, restaurantId, userId)
                VALUES ('$commentinsert', CURRENT_TIMESTAMP, $id, 1)";
                mysqli_query($db, $sql) or die(mysqli_error($db));
            }

                function dropComment($id){
                    global $db;
                    $data=[];
                $sql = "SELECT `Comment`.`comment`, `dateTime`, `restaurantId`, `userId`
                FROM `Comment` INNER JOIN `Restaurant` on `Comment`.`restaurantid` = `Restaurant`.`id` WHERE `Restaurant`.`id` = $id";
                $result = mysqli_query($db, $sql) or die(mysqli_error($db));	// Podriem llegir tambe $result->num_rows
                
                $data = NULL;
                $data= mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                mysqli_free_result($result);
                return $data;
                }

        
?>