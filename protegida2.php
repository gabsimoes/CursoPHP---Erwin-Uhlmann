<?php include("conecta.php");?>
<?php include("validasessao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=1">

    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<title>Página Protegida</title>
<body>

    <h1>Página Protegida 2</h1>
    <hr>
    <hr>

    <a href="protegida.php">Protegida 1</a> 
    | <a href="protegida2.php">Protegida 2</a> 
    | <a href="logout.php">Logout</a>

    <?php include("rodape.php");?>
</body>
</html>

<?php mysqli_close($conecta);?>