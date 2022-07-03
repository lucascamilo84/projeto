<?php 

include_once('conexao.php');

if (isset($_POST['id'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];

    $sqlUpdate = "UPDATE funcionario SET nome='$nome', email='$email', senha='$senha', cargo='$cargo' WHERE id=$id";

    echo $sqlUpdate;
    $reult = $conexao->query($sqlUpdate);
}
header('Location: exluir_edit.php')
?>