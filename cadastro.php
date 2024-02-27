<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z7Zvltc8q49HrtnIc9YgA6+ndfPbdP6n6qj553" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
    ?>
    <div>
        <h2 class="center" id="titulo">Cadastre-se</h2>
        <br>
    </div>

    <form method="post" action="cadastrar.php">
        <fieldset class="ui container">
            <div>
                <label><strong>Email:</strong></label>
            </div>
            <div class="ui input">
                <input type="email" name="email" id="email" placeholder="Digite seu email" required>
            </div>
            <br><br>
            <div>
                <label><strong>Senha:</strong></label>
            </div>
            <div class="ui input">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            </div>
        </fieldset>
        <br>
        <p id="checkuser" class="ui container"></p>
        <?php
            if(isset($_GET['error']) && $_GET['error'] == 'usuariojacadastrado'){
                echo "<script>document.getElementById('checkuser').innerHTML = 'Usuário já cadastrado!';</script>";
            }elseif(isset($_GET['check']) && $_GET['check'] == 'usuariocadastrado'){
                echo "<script>document.getElementById('checkuser').innerHTML = 'Usuário cadastrado com sucesso!';</script>";
            }
        ?>
        <br>
        <div class="ui container">
            <button id="botaocadastrar" class="ui button" type="submit">Cadastrar</button>
            <a href="index.php"><button id="botaologin" class="ui primary button" type="button">Faça seu Login</button></a>
        </div>
    </form>

</body>
</html>