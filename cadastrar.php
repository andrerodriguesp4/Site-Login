<?php
    if(isset($_POST['email']) && isset($_POST['senha'])){
        include("connectiondb.php");
    
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    
        $query = "SELECT * FROM usuarios WHERE email='$email';";
        $result = $conn->query($query);
    
        if($result->num_rows > 0){
            header("Location: cadastro.php?error=usuariojacadastrado", true, 301);
            exit();
        }else{
            $query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$senha');";
            $result = $conn->query($query);
            header("Location: cadastro.php?check=usuariocadastrado", true, 301);
            exit();
        }
    
    }      
?>