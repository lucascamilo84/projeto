

<?php
session_start();
include('conexao.php');

if (!isset($_POST['Email']) || !isset($_POST['Senha'])) {
	die("Erro");
}

if (empty($_POST['Email']) || empty($_POST['Senha'])) {
	header('Location: ../login.php');
	exit();
}

if (empty($_POST['Email'])) {
	die("Erro-escreva seu email");
}

if (empty($_POST['Senha'])) {
	die("Erro-escreva sua senha");
}
$email = $_POST["Email"];
$senha = $_POST["Senha"];

$email = mysqli_real_escape_string($conexao, $_POST['Email']);
$senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

$query = "select email from cliente where email = '$Email' and senha ='$Senha';";
echo $query;

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if ($row > 0) {
	$_SESSION['Email'] = $Email;
	header('Location:../pag_inicial/');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login_usu.php');
	exit();
}