<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include("connectiondb.php");

        $email = $_POST["email"];

        $query = "SELECT * FROM usuarios WHERE email='$email';";
        $result = $conn->query($query);

        if($result->num_rows > 0){
            $_SESSION["email"] = $email;
            header("Location: loginsenha.php", true, 301);
            exit();
        }else{
            header("Location: loginemail.php?error=emailnaoencontrado", true, 301);
            exit();
        }

    }
?>