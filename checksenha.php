<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    include("connectiondb.php");

    $senha = $_POST["senha"];

    // Preparar a consulta SQL com um placeholder (?)
    $query = "SELECT * FROM usuarios WHERE password=?";
    $stmt = $conn->prepare($query);
    // Associar o parâmetro
    $stmt->bind_param("s", $senha);
    // Executar a consulta
    $stmt->execute();
    // Obter o resultado
    $result = $stmt->get_result();

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