<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'conexao.php';
    $id= $_GET['id'];  
    $consulta = $conexao ->query("SELECT * FROM calcados where id='$id'");
    
?>
</body>
</html>