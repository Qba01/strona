<?php
session_start();
?>
<!doctype html>
<html lang="pl" dir="ltr">
     <head>
          <meta charset="UTF-8" />
          <title>Rejestracja</title>
          <link rel="stylesheet" href="test.css" type ="text/css"/>
     </head>
     <body>

       <div class="header">
         <h1>My Website</h1>
         <p>Resize the browser window to see the effect.</p>
       </div>

       <div class="topnav">
         <a href="./index.html">Główna</a>
         <a href="#">Najpopularniejsze</a>
         <a href="#">Link</a>
         <a href="logowanie.php" style="float:right">Zaloguj</a>
         <a href="#" style="float:right">Zarejestruj</a>
       </div>

       <div class ="rejestracja">
         <div id="panel_2">
           <?php
           if (isset($_SESSION['error'])) {
             echo '<span class="red">', $_SESSION['error'], '</span>';
             unset($_SESSION['error']);
           }
            ?>
           <form action="rejcheck.php" method="post">
             <label for="imie">Imię:</label>
             <input type="text" id="imie" name="imie">
             <label for="nazwisko">Nazwisko:</label>
             <input type="text" id="nazwisko" name="nazwisko">
             <label for="email">Adres email:</label>
             <input type="text" id="email" name="email">
             <label for="username">Nazwa użytkownika:</label>
             <input type="text" id="username" name="username">
             <label for="password">Hasło:</label>
             <input type="password" id="password" name="password">
               <div id="lower2">
               <input type="submit" value="Zarejestruj">
               </div>
           </form>

         </div>
      </div>
     </body>
</html>
