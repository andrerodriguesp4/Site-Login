<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    include("connectiondb.php");

    $email = $_POST["email"];

    // Preparar a consulta SQL com um placeholder (?)
    $query = "SELECT * FROM usuarios WHERE email=?";
    $stmt = $conn->prepare($query);
    // Associar o parâmetro
    $stmt->bind_param("s", $email);
    // Executar a consulta
    $stmt->execute();
    // Obter o resultado
    $result = $stmt->get_result();

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