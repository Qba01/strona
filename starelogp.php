<?php
session_start();
if (!empty($_POST['login']) && !empty($_POST['pass']))
{
  require_once('./connect.php');
  if($connect)
  {
    $login =$connect->real_escape_string(htmlentities($_POST['login']));
    $pass =$connect->real_escape_string(htmlentities($_POST['pass']));
    $sql="SELECT * FROM `users` WHERE login='$login' and pass='$pass'";
    if ($result = $connect->query($sql))
    {
      if ($result->num_rows==1)
       {
        $connect->close();
        $_SESSION['zalogowany']['login'];
        header('location: ./zalogowany.php');
      }else {
        $_SESSION['error']='Błędny login lub hasło';
        header('location: ./logowanie.php');
      }
    }
  }
}else {
header('location: ./logowanie.php');
$_SESSION['error'] = 'Wypelnij wszystkie pola !!!';
}
?>
