<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<title>Curso PHP MySQLi</title>
<body>

    <h1>Login</h1>
    <h2>Usuário e Senhas Requeridos</h2>
    <fieldset>
        <legend>Login</legend>


        <!--FORMULÁRIO-->
        <form method="POST" action="validar.php">

            <label>
                Email: <input type="email" name="email" value="" placeholder="Digite seu email" autofocus required>
                <br>
                <br>
                Senha: <input type="password" name="senha" value="" placeholder="Digite sua senha">
                <br>
                <br>
                <input type="submit" name="login" value="Login">
            </label>

        </form>

    </fieldset>

    <?php if(isset($_GET['erro'])){echo "Usuário e/ou senha incorretos!";}?>

    <?php include("rodape.php");?>
</body>
</html>
