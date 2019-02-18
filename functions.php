<?php

/*Esta es una pagina de funciones en .php

Llamamos al fichero que almacena la conexion con la base de datos*/
require_once "connection.php";
session_start();
// =============================================

/*Definimos una funcion que almacena el resultado de la busqeda en la abse de datos */
function getRestaurants($que){
    global $db;
    /*Identificamos el valor de el boton de orden y lo guardamos en una variable */
    if(!empty($_REQUEST['o'])):
        if($_REQUEST['o']==1):
            $ord=ASC;
        elseif($_REQUEST['o']==2):
            $ord=DESC;
        endif;
    endif;
    /*Con este comando podemos limpiar de ordenes enviadas desde el exterior a nuestra BD; sin esta linea podrian 
    enviar un texto en el buscador que fuese delete base de datos y se me borraria toda la base de datos */
    $que=mysqli_real_escape_string($db,$que);
    $data=[];
    /*Ejecutamos la busqueda en la base de datos de formas distintas dependioendo si hemos incluido texto en la busqueda */
    if(!empty($que)):
        $sql = "SELECT `Restaurant`.`id`, `name`, `description`, `openingHours`, 
        `priceCategory`, `locality`, `route`, `streetNumber`, `postalCode`, `latitude`, `longitude`, 
        `phoneNumber`, `website`, `email`, `rating`, `isTrending`, `gMap`, `filePath` 
        FROM `Restaurant` 
        INNER JOIN `Image` on `Restaurant`.`id` = `Image`.`id` 
        WHERE `Restaurant`.`name` LIKE '%$que%'
        ORDER by `Restaurant`.`name` $ord ;";
    else:
        $sql = "SELECT `Restaurant`.`id`, `name`, `description`, `openingHours`, `priceCategory`, 
        `locality`, `route`, `streetNumber`, `postalCode`, `latitude`, `longitude`, `phoneNumber`, 
        `website`, `email`, `rating`, `isTrending`, `gMap`, `filePath` 
        FROM `Restaurant` INNER JOIN `Image` on `Restaurant`.`id` = `Image`.`id`
        ORDER by `Restaurant`.`name` $ord ;";
    endif;
    /*Devolvemos los valores de la busqeda */
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));	// Podriem llegir tambe $result->num_rows
    $data = NULL;
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($db);
    return $data;
}
/* Definimos una funcion que llama a los valores de sql segun la id de restaurante que hemos seleccionado en la pagina
Index.php, esta funcion es para la pagina rest.php  */
function getRestaurant($id){
    global $db;
     /*Con este comando podemos limpiar de ordenes enviadas desde el exterior a nuestra BD; sin esta linea podrian 
    enviar un texto en el buscador que fuese delete base de datos y se me borraria toda la base de datos */
    $id=mysqli_real_escape_string($db,$id);
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
/*Definimos una funcion para subir los comentarios que crean los usuarios */
function putComment($commentinsert, $id){
    global $db;
    /*Con este comando podemos limpiar de ordenes enviadas desde el exterior a nuestra BD; sin esta linea podrian 
   enviar un texto en el buscador que fuese delete base de datos y se me borraria toda la base de datos */
   $id=mysqli_real_escape_string($db,$id);
    $sql = "INSERT INTO Comment (comment, dateTime, restaurantId, userId)
    VALUES ('$commentinsert', CURRENT_TIMESTAMP, $id, 1)";
    mysqli_query($db, $sql) or die(mysqli_error($db));
}
/*Definimos una funcion para poner los comentarios en la pagina del restaurante indicado */
function dropComment($id){
    global $db;
    /*Con este comando podemos limpiar de ordenes enviadas desde el exterior a nuestra BD; sin esta linea podrian 
   enviar un texto en el buscador que fuese delete base de datos y se me borraria toda la base de datos */
   $id=mysqli_real_escape_string($db,$id);
    $data=[];
    $sql = "SELECT `Comment`.`comment`, `dateTime`, `restaurantId`, `userId`
    FROM `Comment` INNER JOIN `Restaurant` on `Comment`.`restaurantid` = `Restaurant`.`id` WHERE `Restaurant`.`id` = $id";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));	// Podriem llegir tambe $result->num_rows
    $data = NULL;
    $data= mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $data;
}

/*Funcion para loguear a un usuario */
function login($user, $password){
    global $db;
    
     /*Con este comando podemos limpiar de ordenes enviadas desde el exterior a nuestra BD; sin esta linea podrian 
    enviar un texto en el buscador que fuese delete base de datos y se me borraria toda la base de datos */
    $user=mysqli_real_escape_string($db,$user);
    $password=mysqli_real_escape_string($db,$password);
    $query = "SELECT * FROM User WHERE username='$user'";
    $result = mysqli_query($db,$query);
    if (!$result): 
        $_SESSION['log']='uswr';
        elseif ($result->num_rows):
            $row = mysqli_fetch_assoc($result);
            $result->close();
            $token = hash('md5', $password);
            if ($token == $row['password']): 
                $_SESSION['log']='okay';
                $_SESSION['user']=$user;
                 header('Location: index.php');
            else: 
                $_SESSION['log']='pswr';
            endif;
        else:
            $_SESSION['log']='uswr';
    endif;
}
/*Funcion para que los usuarios se registren */   
function register($user, $name, $surna, $email,  $password) {
    global $db;
    /*Con este comando podemos limpiar de ordenes enviadas desde el exterior a nuestra BD; sin esta linea podrian 
   enviar un texto en el buscador que fuese delete base de datos y se me borraria toda la base de datos */
   $user=mysqli_real_escape_string($db,$user);
   $name=mysqli_real_escape_string($db,$name);
   $surna=mysqli_real_escape_string($db,$surna);
   $email=mysqli_real_escape_string($db,$email);
   $password=mysqli_real_escape_string($db,$password);
    $token = hash('md5', "$password");
    $query1 = "SELECT  username FROM User WHERE username = '$user';";
    $result1 = mysqli_query($db, $query1);
    if (!$result1 || (mysqli_num_rows($result1) == 0)):
        $query = "INSERT INTO User(username, name, surname, email, password) 
        VALUES('$user', '$name', '$surna', '$email', '$token')";
        $result = mysqli_query($db, $query);
        if (!$result):
            die($connection->error);$_SESSION["regis"] = 'nop'; 
        else: 
            $_SESSION["regis"] = 'okay'; 
        endif;
    else: 
        $_SESSION["regis"] = 'dupli';
    endif;
} 
?>