<?php include("conecta.php"); ?>

<?php 

    $usuGet = $_GET['usu'];
    $grv = mysqli_query($conecta, "DELETE FROM usuarios WHERE usu_id = '$usuGet'");

    if($grv == true) {
        header("location: index.php?x");
    }

?>

<?php mysqli_close($conecta); ?>