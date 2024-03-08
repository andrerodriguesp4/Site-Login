<?php
if(isset($_POST['email']) && isset($_POST['senha'])){
    include("connectiondb.php");

    $nome = $_POST["nome"];
    $nasc = $_POST["nasc"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

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
        header("Location: cadastro.php?error=usuariojacadastrado", true, 301);
        exit();
    }else{
        // Preparar a consulta de inserção
        $query = "INSERT INTO usuarios (nome, datanasc, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        // Associar os parâmetros
        $stmt->bind_param("ssss", $nome, $nasc, $email, $senha);
        // Executar a consulta de inserção
        $stmt->execute();
        header("Location: cadastro.php?check=usuariocadastrado", true, 301);
        exit();
    }
}
?>