<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z7Zvltc8q49HrtnIc9YgA6+ndfPbdP6n6qj553" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        #divcadastro{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
    ?>
    <div id="divcadastro">
        <h2>Cadastre-se</h2>
        <br>
        <form method="post" action="cadastrar.php">
            <fieldset>
                <div>
                    <label><strong>Nome: </strong></label>
                </div>
                <div class="ui input">
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required autocomplete="off">
                </div>
                <br><br>
                <div>
                    <label><strong>Data de Nascimento: </strong></label>
                </div>
                <div class="ui input">
                    <input type="date" name="nasc" id="nasc" placeholder="Digite sua data de nascimento" required autocomplete="off">
                </div>
                <br><br>
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
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required autocomplete="off">
                </div>
            </fieldset>
            <br>
            <p id="checkuser"></p>
            <?php
                if(isset($_GET['error']) && $_GET['error'] == 'usuariojacadastrado'){
                    echo "<script>document.getElementById('checkuser').innerHTML = 'Este email já está sendo utilizado!';</script>";
                }elseif(isset($_GET['check']) && $_GET['check'] == 'usuariocadastrado'){
                    echo "<script>document.getElementById('checkuser').innerHTML = 'Usuário cadastrado com sucesso!';</script>";
                }
            ?>
            <br>
            <div>
                <button id="botaocadastrar" class="ui primary button" type="submit">Cadastrar</button>
                <a href="index.php"><button id="botaologin" class="ui button" type="button">Faça seu Login</button></a>
            </div>
        </form>
    </div>

</body>
</html>