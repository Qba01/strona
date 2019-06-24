<?php
session_start();
  if (!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once('./connect.php');
    if($connect){

      $login = $connect->real_escape_string(htmlentities($_POST['username']));
      $pass = $connect->real_escape_string(htmlentities($_POST['password']));
      $imie = $connect->real_escape_string(htmlentities($_POST['imie']));
      $nazwisko = $connect->real_escape_string(htmlentities($_POST['nazwisko']));
      $email =$connect->real_escape_string(htmlentities($_POST['email']));
      $p_hash = password_hash($pass, PASSWORD_DEFAULT);

      $sql = "SELECT * FROM `users` WHERE login='$login'";
      $sql_insert  = "INSERT INTO `users`(`login`, `password`, `imie`, `nazwisko`,`mail`) VALUES ('$login','$p_hash','$imie','$nazwisko','$email')";
      if ($result = $connect->query($sql)){
        if ($result->num_rows==1){
          $connect->close();
          $_SESSION['error']='Uzytkownik o danym tym loginie już istnieje';
          header('location: ./rejestracja.php');
        }else
          if ($connect->query($sql_insert)){

            header('location: ./logowanie.php');
          }else {
            $_SESSION['error']='Error'.$sql_insert;
            header('location: ./rejestracja.php');
          }
        }
      }
  }else {
    header('location: ./rejestracja.php');
    $_SESSION['error'] = 'Wypelnij wszystkie pola';
  }
?>
