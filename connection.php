<?php 
/*Pagina que crea una conexion con la base de datos */
define("DB_HOST", "localhost");
define("DB_USER", "rastorga");
define("DB_PASS", "12345678");
define("DB_NAME", "rastorga");

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db){ die("Error estableciendo la conexion: " . mysqli_connect_error()); }
?>
