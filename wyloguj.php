<?php
session_start();
session_destroy();
session_unset();
?>
<!doctype html>
<html lang="pl" dir="ltr">
     <head>
          <meta charset="UTF-8" />
          <title>Moja strona</title>
          <link rel="stylesheet" href="test.css" type ="text/css"/>
     </head>
     <body>

       <div class="header">
         <h1>My Website</h1>
         <!-- <p>Pomyślne wylogowanie</p> -->
       </div>

       <div class="topnav">
         <a href="./index.html">Główna</a>
         <a href="#">Najpopularniejsze</a>
         <a href="#">Link</a>
         <a href="logowanie.php" style="float:right">Zaloguj</a>
         <a href="rejestracja.php" style="float:right">Zarejestruj</a>
       </div>

       <div class ="zalogowany">
          <h3>Wylogowano</h3>
      </div>
     </body>
</html>
