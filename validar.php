<?php include("conecta.php");?>

<?php 
    //RECEBE OS DADOS LOGIN
    $email = strip_tags(trim($_POST['email']));
    $senha = sha1($_POST['senha']);

    //PESQUISAR EMAIL E SENHA
    $usuario = mysqli_query($conecta, "SELECT * FROM usuarios WHERE usu_email = '$email'");
    $registros = mysqli_num_rows($usuario);

    if($registros == 0){
        header("location: login.php?erro");
    }

    else {
        $usu = mysqli_fetch_row($usuario);

        if($senha != $usu[3]){
            header("location: login.php?erro");
        }

        else{
            session_start(); //iniciar sessão
            $_SESSION['email'] = $email; //nome da sessão email é igual a email
            $_SESSION['senha'] = $senha; 
            header("location: protegida.php");
        }
    }

?> 

<?php mysqli_close($conecta);?>