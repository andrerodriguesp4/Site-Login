<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 2.0</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z7Zvltc8q49HrtnIc9YgA6+ndfPbdP6n6qj553" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, red, black);
        }
        #divlogin{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
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
        session_start();
        if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
            header("Location: site.php");
            exit();
        }
        if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
            header("Location: site.php", true, 301);
            exit();
        }
        if(!isset($_SESSION["email"])){
            header("Location: loginemail.php", true, 301);
        }
    ?>
    <div id="bodyemail">
        <div id="divlogin">
            <h2 style="font-family: Arial, Helvetica, sans-serif;">Login</h2>
            <form method="post" action="checksenha.php">
                <fieldset>
                    <div>
                        <label><strong>Senha:</strong></label>
                    </div>
                    <div class="ui input">
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>
                </fieldset>
                <p id="checkuser" style="color: yellow;"></p>
                <?php
                    if(isset($_GET['error']) && $_GET['error'] == 'senhainvalida'){
                        echo "<script>document.getElementById('checkuser').innerHTML = 'Senha inválida!';</script>";
                    }
                ?>
                <a href="logoutemail.php"><p>Utilizar outro email</p></a>
                <br>
                <div>
                    <button id="botaoavançar" class="ui primary button" type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>