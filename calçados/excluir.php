<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = " SELECT * FROM calcados WHERE id=$id";

    $reult = $conexao->query($sqlSelect);

    if ($reult->num_rows > 0) {
        $sqlDelete = "DELETE FROM calcados WHERE id=$id";
        $reultDelete = $conexao->query($sqlDelete);
    } else {
      
        header( "Location: editar_excluir.php"); 
    }
  
}   header("Location: editar_excluir.php"); 
