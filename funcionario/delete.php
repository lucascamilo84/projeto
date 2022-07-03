<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = " SELECT * FROM funcionario WHERE id=$id";

    $reult = $conexao->query($sqlSelect);

    if ($reult->num_rows > 0) {
        $sqlDelete = "DELETE FROM funcionario WHERE id=$id";
        $reultDelete = $conexao->query($sqlDelete);
    } else {
      
        header( "Location: exluir_edit.php"); 
    }
  
}   header("Location: exluir_edit.php"); 

