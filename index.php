<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<title>Curso PHP MySQLi</title>
<body>

    <h1>PHP MySQLi</h1>
    <h2>Gravar Dados</h2>
    <fieldset>
        <legend>CRUD Usuário</legend>


        <!--FORMULÁRIO-->
        <form method="POST" action="gravar.php">

            <label>
                Nome: <input type="text" name="nome" value="" placeholder="Escreva seu nome" autofocus>
                <br>
                <br>
                Email: <input type="email" name="email" value="" placeholder="Digite seu email" autofocus>
                <br>
                <br>
                Senha: <input type="password" name="senha" value="" placeholder="Digite sua senha">
                <br>
                <br>
                <input type="submit" name="gravar" value="Enviar">
            </label>

        </form>

    </fieldset>

    <?php if(isset($_GET['Ok'])){echo "Usuário cadastrado com sucesso!";}?>
    <?php if(isset($_GET['x'])){echo "Usuário excluído com sucesso!";}?>

        <h2>Leitura dos Dados</h2>

    <fieldset>
        <legend>Registros</legend>

        <?php include("ler.php");?>
    </fieldset>

    <?php include("rodape.php");?>
</body>
</html>