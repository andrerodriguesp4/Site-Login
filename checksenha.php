<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include("connectiondb.php");
        
        $senha = $_POST["senha"];

        $query = "SELECT * FROM usuarios WHERE password='$senha';";
        $result = $conn->query($query);

        if($result->num_rows > 0){
            $_SESSION["senha"] = $senha;
            header("Location: site.php", true, 301);
            exit();
        }else{
            header("Location: loginsenha.php?error=senhainvalida", true, 301);
            exit();
        }

    }
?>