<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Alunos</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z7Zvltc8q49HrtnIc9YgA6+ndfPbdP6n6qj553" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, red, black);
        }
    </style>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION["email"])){
            header("Location: loginemail.php", true, 301);
            exit();
        }
        if(!isset($_SESSION["senha"])){
            header("Location: loginemail.php", true, 301);
        }
    ?>

    <div class="ui container">
        <h2 id="titulo"> Olá, seja bem vindo(a)!</h2>
        <h3 id="h3login"></h3>
        <?php
            include("connectiondb.php");

            $email = $_SESSION["email"];

            $query = "SELECT nome FROM usuarios WHERE email='$email';";
            $result = $conn->query($query);

            $row = $result->fetch_assoc();
            $name = $row['nome'];

            echo "<script>document.getElementById('h3login').innerHTML = 'Usuário: $name';</script>";
        ?>
    </div>
    <div class="ui container">
        <form action="logout.php" method="post">
            <button class="ui primary button">Sair</button>
        </form>
    </div>
</body>
</html>