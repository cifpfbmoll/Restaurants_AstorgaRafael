# Task_Restaurants_AstorgaRafael 3.0

## Rafael Astorga Mora

### ASIX2 - 2018/19

This task is about to create a web page with information of a few restaurants. It works on Apache, PHP & SQL; the web page contains 8 restaurants whose information come from a sql DB; It includes a form were you can do a search on the page and order the result.

### Connection to database
<?php 
/*Pagina que crea una conexion con la base de datos */
    define("DB_HOST", "[web-server]");
    define("DB_USER", "[username]");
    define("DB_PASS", "[password]");
    define("DB_NAME", "[name]");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
        if (!$db){ die("Error estableciendo la conexion: " . mysqli_connect_error()); }
?>

With this code you can connect the code with de sql of your XAMPP for example


he README file must be a Markdown file that explains how this program can be deployed in a web server, and their requirements (Apache, PHP…). Important: now, it must contain how to deploy the database. This file must contain also information about this task (name, author, subject, school year…).
