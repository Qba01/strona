<?php
session_start();
if (!empty($_POST['username']) && !empty($_POST['password'])){
  require_once('./connect.php');
  if($connect){
    $login = $connect->real_escape_string(htmlentities($_POST['username']));
    $pass = $connect->real_escape_string(htmlentities($_POST['password']));
    $sql = "SELECT * FROM `users` WHERE login='$login' and password='$pass'";
    if ($result = $connect->query($sql)){
      if ($result->num_rows==1){
        $connect->close();
        $_SESSION['zalogowany']['username'];
        header('location: ./zalogowany.php');
      }else {
        $_SESSION['error']='Błędny login lub hasło';
        header('location: ./logowanie.php');
      }
    }
  }
}else {
  header('location: ./logowanie.php');
  $_SESSION['error'] = 'Wypelnij wszystkie pola';
}
?>
