# Task_Restaurants_AstorgaRafael 3.0

## Rafael Astorga Mora

### ASIX2 - 2018/19

This task is about to create a web page with information of a few restaurants. It works on Apache, PHP & SQL; the web page contains 8 restaurants whose information come from a sql DB; It includes a form were you can do a search on the page and order the result.

## 5.0 CHANGES

1. The search engine motor is updated; now it  use the SQL resources for do the search and not to use the PHP resouces
2. Now you can get registered and get loged in the web page; there are 3 new pages
   + 1.1 login.php
        It manages the page for get logged in the web page, it controls if you get wrong on your password or in your user; if you get logged you will get redirected to the index page
   + 1.2 reg.php
        It manages the page fot get registered in the web page, it control if you are pretending to create a duplicate user; if ypu get well registered you will be redirected to the login.php
   + 1.3 logout.php
        At the moment you get logged; in the index page the login and register button get disapeared and a logout button appears next to the text "Hello %Usernama%"; if you press the button you will be redirected to the index page but you don't will be logged in the page.

## 4.0 Changes
This update includes coments for the restaurants


### Manage  database file

#### Create your DB

For create the DB of my webpage you can taque the file *restaurants.slq* from the *sql* folder and run this script on your DBmanager

#### Connection to database

You can get connect your web page with this code in a *.php* page

```php 

      define("DB_HOST", "[web-server]");
      define("DB_USER", "[username]");
      define("DB_PASS", "[password]");
     define("DB_NAME", "[name]");

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
        if (!$db){ die("Error estableciendo la conexion: " . mysqli_connect_error()); }
```

With this code you can connect the code with de sql of your XAMPP for example

https://serveriaw.iesfbmoll.org/~rastorga/restaurante
