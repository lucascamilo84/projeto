<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include 'conexao.php';
$calcados = "SELECT * FROM calcados";
$calcado = mysqli_query($conexao, $calcados);
while ($user_data = mysqli_fetch_assoc($calcado)) {
    echo "<td>" . $user_data['id'] . "</td>";
    echo "<td>" . $user_data['nome'] . "</td>";
    echo "<td>" . $user_data['marca'] . "</td>";
    echo "<td>" . $user_data['tamanho'] . "</td>";
    echo "<td>" . $user_data['genero'] . "</td>";
    echo "<td>" . $user_data['tipo'] . "</td>";
    echo "<td>" . $user_data['quantidade'] . "</td>";
    echo "<td>" . $user_data['preco'] . "</td>";
}

?>

<body>

</body>

</html>