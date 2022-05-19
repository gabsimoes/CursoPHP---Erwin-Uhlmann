<?php include("conecta.php"); ?>

<?php
    $usuGet = $_GET['usu'];
    $ler = mysqli_query($conecta, "SELECT * FROM usuarios WHERE usu_id = '$usuGet'");
    $usu = mysqli_fetch_row($ler);
?>

<?php

if(isset($_POST['gravar'])){

//receber os dados do formulário
    $nome = strip_tags(trim($_POST['nome'])); //comando strip_tags faz com que as tags html e php não seja interpretável (html e php injection) e trim remove os espaços (sql injection)
    $email = strip_tags(trim($_POST['email']));
    $senha = sha1($_POST['senha']); //senha encriptada

//editar dados
    $grv = mysqli_query($conecta, "UPDATE usuarios SET usu_nome = '$nome', usu_email = '$email', usu_senha = '$senha' WHERE usu_id = '$usuGet'");

    if($grv == true){
        header("location: index.php?usu=$usu[0]&ok"); //caminho que gravará os dados
    }

    else{
        header("location: editar.php?usu=$usu[0]&erro");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<title>Página de Edição do Usuário <?php echo $usu[1]; ?></title>
<body>
    <h1>Página de Edição do Usuário <?php echo $usu[1];?></h1>
    <hr>
    <a href="index.php"> Home </a>

<h2>Editar Dados</h2>
    <fieldset>
        <legend>CRUD Usuário</legend>


        <!--FORMULÁRIO-->
        <form method="POST" action="editar.php?usu=<?php echo $usu[0]; ?>">

            <label>
                Nome: <input type="text" name="nome" value="<?php echo $usu[1]; ?>" autofocus>
                <br>
                <br>
                Email: <input type="email" name="email" value="<?php echo $usu[2]; ?>" autofocus>
                <br>
                <br>
                Senha: <input type="password" name="senha" value="">
                <br>
                <br>
                <input type="submit" name="gravar" value="Enviar">
            </label>

        </form>

    </fieldset>

    <?php if(isset($_GET['Ok'])){echo "Usuário alterado com sucesso!";}?>
    <?php if(isset($_GET['erro'])){echo "Algo deu errado! Tente novamente.";}?>

    <?php include("rodape.php");?>
</body>
</html>




<?php mysqli_close($conecta); ?>