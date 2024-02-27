<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include("connectiondb.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $query = "SELECT * FROM usuarios WHERE email='$email' AND password ='$senha'";
        $result = $conn->query($query);

        if($result->num_rows > 0){
            header("Location: site.php", true, 301);
            exit();
        }else{
            header("Location: index.php?error=usuarionaoencontrado", true, 301);
            exit();
        }

    }
?>