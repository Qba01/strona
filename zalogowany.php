<?php
session_start();
$idletime = 300; //5min
if(time() - $_SESSION[timestamp]>$idletime){
  session_destroy();
  session_unset();
  header('location: ./logowanie.php');
  echo "<script>alert('Wylogowano przez brak aktywnosci');</script>";
}else{
  $_SESSION['timestamp']=time();
}
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
         <p>Moja strona</p>
       </div>

       <div class="topnav">
         <a href="./index.html">Główna</a>
         <a href="#">Najpopularniejsze</a>
         <a href="#">Link</a>
         <a href="wyloguj.php" style="float:right">Wyloguj</a>
       </div>
       <div class ="zalogowany">
         <p>Twoje dane mogły by tu być, ale są na serwerze</p> <br><br>
      </div>
     </body>
</html>
