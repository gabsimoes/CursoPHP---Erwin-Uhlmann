function excluir(id){
    var c = confirm("Deseja realmente excluir o  usuário " + id + "?");
    if(c == true){
        location.href = "excluir.php?usu=" + id;
    }
}