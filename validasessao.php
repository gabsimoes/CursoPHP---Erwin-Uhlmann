<?php include("conecta.php");?>

<?php 

    session_start();
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }

    else {
        header("location: login.php?erro");
    }

    session_start();
    if(isset($_SESSION['senha'])){
        $senha = $_SESSION['senha'];
    }

    else {
        header("location: login.php?erro");
    }

    if(!(empty($email) || empty($senha))){
        $busca = mysqli_query($conecta, "SELECT * FROM usuarios WHERE usu_email = '$email'");

        if(mysqli_num_rows($busca) == 1){

            $usu = mysqli_fetch_row($busca);

            if($senha != $usu[3]){
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header("location: login.php?erro");
                exit;
            }

            else{
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header("location: login.php?erro");
                exit;
            }
        }

        else {
            header("location: login.php");
            exit;
        }
    }
?>


<?php mysqli_close($conecta);?>