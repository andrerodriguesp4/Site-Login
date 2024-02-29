<?php
$servername = "localhost";
$username = "root";
$password = file_get_contents("passworddb.txt");
$database = "cadastro";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die("Falha na conexão: ". $conn->connect_error);
}
?>