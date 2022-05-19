<?php include("conecta.php");?>

    <?php
    $usuGet = $_GET['usu'];
    $ler = mysqli_query($conecta, "SELECT * FROM usuarios WHERE usu_id = '$usuGet'");
    $usu = mysqli_fetch_row($ler);
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<title>Página do Usuário <?php echo $usu[1]; ?></title>
<body>

    <h1>
        Página do Usuário <?php echo $usu[1]; ?>

        <hr>

        <a href="index.php"> Home </a>

        <hr>

        <h2>
            <?php echo $usu[1]; ?>
        </h2>

        <fieldset>
            <legend>
                Dados
            </legend>

            <?php 
            
            for($j = 0; $j < mysqli_num_fields($ler); $j++) {
                echo "<p>$usu[$j]</p>"; //imprimirá um por um
            }

            echo "<a href='editar.php?usu=$usu[0] id='editar'> Editar </a> |";
            echo "<a href='#' id='excluir' onclick='excluir($usu[0])'> Excluir </a>";
            
            ?>

        </fieldset>

        <?php include("rodape.php")?>


    </h1>

</body>
</html>
<?php mysqli_close($conecta);?>