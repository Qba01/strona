<!doctype html>
<html>
     <head>
          <meta charset="UTF-8" />
     </head>
     <body>

       <link rel="stylesheet" href="test.css" type ="text/css"/>

       <div class="header">
         <h1>My Website</h1>
         <p>Resize the browser window to see the effect.</p>
       </div>

       <div class="topnav">
         <a href="#">Główna</a>
         <a href="#">Najpopularniejsze</a>
         <a href="#">Link</a>
         <a href="logowanie.php" style="float:right">Zaloguj</a>
         <a href="#" style="float:right">Zarejestruj</a>
       </div>

       <div class ="rejestracja">
       <div id="panel_2">
       <form>
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
       <div id="lower">
       <input type="submit" value="Zarejestruj">
       </div>
       </form>
       </div>
      </div>
     </body>
</html>
