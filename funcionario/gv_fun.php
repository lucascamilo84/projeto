<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>
    <a href='/tcc/funcionario/cadfun.php'>
        <input type='button' value='Novo Funcionario' href='' />
    </a>

    <h1>Inserção do Funcionario</h1>

    Email do Funcionario
    <?php
    echo $_POST["Email"];
    $Email = $_POST["Email"];

    ?> <br>
    Nome do Funcionario
    <?php
    echo $_POST["Nome"];
    $Nome = $_POST["Nome"];
    ?> <br>

    Senha do Funcionario
    <?php
    echo $_POST["Senha"];
    $Senha = $_POST["Senha"];
    ?> <br>

    Cargo do Funcionario
    <?php
    echo $_POST["cargo"];
    $cargo = $_POST["cargo"];
    ?> <br>


    <?php
    $sql = "INSERT INTO funcionario (nome, email, senha, cargo) VALUES ('${Nome}', '${Email}','${Senha}', '${cargo}' )";

    $con = new mysqli("localhost", "root", "&reCH1m", "banco_style") or die(mysqli_connect_error());

    if ($con->connect_error) {
        die("Conexão falhou: " . $con->connect_error);
    }
    mysqli_query($con, $sql);
    if (mysqli_error($con)) {
        echo mysqli_error($con);
    } else {
        echo "funcionario inserido com sucesso!";
    }
    mysqli_close($con);
    ?>

</body>

</html>