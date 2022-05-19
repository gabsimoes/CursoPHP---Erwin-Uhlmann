 <?php include("conecta.php");?>
 <script type="text/javascript" src="JS/funcao.js"></script>

 <?php
 $ler = mysqli_query($conecta, "SELECT * FROM usuarios");

 $i=0;

 while($usu = mysqli_fetch_row($ler)){
     for($j = 0; $j < mysqli_num_fields($ler); $j++){
         echo $usu[$j]. " | ";
     }

     echo "<a href='usuario.php?usu=$usu[0]' id='usuario'> Visitar </a> | ";
     echo "<a href='editar.php?usu=$usu[0]' id='editar'> Editar </a> |";
     echo "<a href='#' id='excluir' onclick='excluir($usu[0])'> Excluir </a>";
     echo "<hr>";

     $i++;

 }
 ?>
 <?php mysqli_close($conecta); //encerramento da conexão do BD ?> 