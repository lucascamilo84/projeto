<?php 

include_once('conexao.php');

if (isset($_POST['id'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $tamanho = $_POST['tamanho'];
    $genero = $_POST['genero'];
    $tipo = $_POST['tipo'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sqlUpdate = "UPDATE calcados SET nome='$nome', marca='$marca', tamanho='$tamanho', genero='$genero', tipo='$tipo', quantidade='$quantidade', $preco='preco'  WHERE id=$id";

    echo $sqlUpdate;
    $reult = $conexao->query($sqlUpdate);
}
header('Location: editar_excluir.php')
?>