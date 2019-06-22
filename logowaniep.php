<?php
session_start();

    if ( ! empty( $_POST ) ) {
        if ( isset( $_POST['login'] ) && isset( $_POST['pass'] ) ) {
            // Getting submitted user data from database
            $connect= new mysqli('localhost','root','','projekt');
            $login =$connect->real_escape_string(htmlentities($_POST['login']));
            $pass =$connect->real_escape_string(htmlentities($_POST['pass']));
            $stmt = $connect->prepare("SELECT * FROM 'users' WHERE login ='$login'");
            $stmt->bind_param('s', $_POST['login']);
            $stmt->execute();
            $result = $stmt->get_result();
        	$user = $result->fetch_object();

        	// Verify user password and set $_SESSION
        	if ( password_verify( $_POST['pass'], $user->password ) ) {
        		$_SESSION['user_id'] = $user->ID;
        	}
        }
    }


?>
