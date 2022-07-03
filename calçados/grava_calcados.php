<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>
    <a href='http://localhost/tcc/calçados/cad_calcados.php'>
        <input type='button' value='Novo Calçado' href='http://localhost/tcc/calçados/cad_mas.php' />
    </a>

    <h1>Inserção de Calçados</h1>

    Nome do Calçado:

    <?php
    echo $_POST["Nome"];
    $Nome = $_POST["Nome"];
    ?> <br>


    Marca do Calçado:

    <?php
    echo $_POST["Marca"];
    $Marca = $_POST["Marca"];
    ?> <br>

    Tamanho do Calçado:
    <?php
    echo $_POST["Tamanho"];
    $Tamanho = $_POST["Tamanho"];

    ?> <br>

    Genero do Calçado:
    <?php
    echo $_POST["Genero"];
    $Genero = $_POST["Genero"]

    ?> <br>
    Tipo do Calçado:
    <?php
    echo $_POST["Tipo"];
    $Tipo = $_POST["Tipo"];

    ?> <br>

    Quantidade de Calçados:
    <?php
    echo $_POST["Quantidade"];
    $Quantidade = $_POST["Quantidade"];
    ?> <br>

    Preço dos Calçados:
    <?php
    echo $_POST["preco"];
    $preco = $_POST["preco"];
    ?> <br>


    <?php
    $sql = "INSERT INTO calcados (nome, marca, tamanho, genero, tipo, quantidade, preco) VALUES ('${Nome}','${Marca}', ${Tamanho},'${Genero}', '${Tipo}', ${Quantidade}, ${preco} )";


    $con = new mysqli("localhost", "root", "", "banco_style") or die(mysqli_connect_error());

    if ($con->connect_error) {
        die("Conexão falhou: " . $con->connect_error);
    }
    mysqli_query($con, $sql);
    if (mysqli_error($con)) {
        echo mysqli_error($con);
    } else {
        echo "Calçados inseridos com sucesso!";
    }
    mysqli_close($con);
    ?>

</body>

</html>