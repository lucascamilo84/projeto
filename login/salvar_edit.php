<?php 

include_once('conexao.php');

if (isset($_POST['id'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
 

    $sqlUpdate = "UPDATE cliente SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";

    echo $sqlUpdate;
    $reult = $conexao->query($sqlUpdate);
}
header('Location: Editar_excluir.php')
?>