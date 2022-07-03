<!DOCTYPE html>
<html lang="en">
<head>
   
    
</head>
<body>
        <a href=''>
        <input type='button' value='Novo Cliente'  href=''/>
</a>

    <h1>Inserção do Cliente</h1>
    Nome do Cliente
<?php
    echo $_POST["Nome"];
    $Nome= $_POST["Nome"];
?> <br>


    Email do Cliente
<?php
    echo $_POST["Email"];
    $Email=$_POST["Email"];
 
?> <br>

    Senha  do Cliente
<?php
    echo $_POST["Senha"];
    $Senha=$_POST["Senha"];
?> <br>


  

<?php 
    $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('${Nome}', '${Email}','${Senha}' )";
    
     $con = new mysqli("localhost","root","","banco_style") or die(mysqli_connect_error());

     if ($con->connect_error) {
         die("Conexão falhou: " . $con->connect_error);
     }
    mysqli_query($con,$sql);
    if (mysqli_error($con)){
        echo mysqli_error ($con);
    }else {
        echo "Cliente inserido com sucesso!";
    }
    mysqli_close ($con);
?>

</body>
</html>