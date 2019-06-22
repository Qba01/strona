<?php
session_start();
?>
<!doctype html>
<html lang="pl" dir="ltr">
     <head>
     <meta charset="UTF-8" />
      <link rel="stylesheet" href="test.css" type ="text/css"/>
      <title>Logowanie</title>
     </head>
     <body>

       <div class="header">
         <h1>My Website</h1>
         <p>Resize the browser window to see the effect.</p>
       </div>

       <div class="topnav">
         <a href="#">Główna</a>
         <a href="#">Najpopularniejsze</a>
         <a href="#">Link</a>
         <a href="#" style="float:right">Zarejestruj</a>
         <a href="logowanie.php" style="float:right">Zaloguj</a>
       </div>
       <div class ="logowanie">
       <div id="panel">
         <?php
         if (isset($_SESSION['error'])) {
           echo '<span class="red">', $_SESSION['error'], '</span>';
           unset($_SESSION['error']);
         }
          ?>
         <form action="logowaniep.php" method="post">
           <label for="username">Nazwa użytkownika:</label>
           <input type="text" id="username" name="username" placeholder="Login">
           <label for="password">Hasło:</label>
           <input type="password" id="password" name="password" placeholder="Hasło">
             <div id="lower">
               <input type="checkbox">
               <label class="check" for="checkbox">Zapamiętaj mnie!</label>
               <input type="submit" name="submit" value="Login">
             </div>
         </form>
       </div>
      </div>
     </body>
</html>
