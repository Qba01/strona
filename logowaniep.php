<?php
session_start();
if (!empty($_POST['username']) && !empty($_POST['password'])){
  require_once('./connect.php');
  if($connect){
    $login = $connect->real_escape_string(htmlentities($_POST['username']));
    $pass = $connect->real_escape_string(htmlentities($_POST['password']));
    $p_hash = password_hash($pass, PASSWORD_DEFAULT);
    $v_hash = password_verify($pass, $p_hash);


    $sql = "SELECT * FROM `users` WHERE login='$login'";
    if ($result = $connect->query($sql)){
      if ($result->num_rows==1){
        if(password_verify($pass, $p_hash)==true)
        {
        $connect->close();
        $_SESSION['zalogowany']['username'];
        $_SESSION['timestamp']=time();
        header('location: ./zalogowany.php');
        }
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
