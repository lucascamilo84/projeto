<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = " SELECT * FROM cliente WHERE id=$id";

    $reult = $conexao->query($sqlSelect);

    if ($reult->num_rows > 0) {
        $sqlDelete = "DELETE FROM cliente WHERE id=$id";
        $reultDelete = $conexao->query($sqlDelete);
    } else {
      
        header( "Location: Editar_excluir.php"); 
    }
  
}   header("Location: Editar_excluir.php"); 

