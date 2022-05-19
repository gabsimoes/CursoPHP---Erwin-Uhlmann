<?php include("conecta.php");?>

<?php

//receber os dados do formulário
    $nome = strip_tags(trim($_POST['nome'])); //comando strip_tags faz com que as tags html e php não seja interpretável (html e php injection) e trim remove os espaços (sql injection)
    $email = strip_tags(trim($_POST['email']));
    $senha = sha1($_POST['senha']); //senha encriptada

//gravar dados
    $grv = mysqli_query($conecta, "INSERT INTO usuarios (usu_nome, usu_email, usu_senha) VALUES ('$nome', '$email', '$senha')");

    if($grv == true){
        header("location: index.php?ok"); //caminho que gravará os dados
    }

    elseif(isset($_GET['edt'])){
        header("location: editar.php?usu=$usu[0]&ok&");
    }

?>

<?php mysqli_close($conecta);?>