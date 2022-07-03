

<?php
session_start();
include('../conexao.php');

if (!isset($_POST['Nome']) || !isset($_POST['Senha'])) {
	die("Erro");
}

if (empty($_POST['Nome']) || empty($_POST['Senha'])) {
	header('Location: ../login.php');
	exit();
}

if (empty($_POST['Nome'])) {
	die("Erro-escreva seu Nome");
}

if (empty($_POST['Senha'])) {
	die("Erro-escreva sua senha");
}
$Nome = $_POST["Nome"];
$senha = $_POST["Senha"];

$Nome = mysqli_real_escape_string($conexao, $_POST['Nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

$query = "select Nome from cliente where Nome = '$Nome' and senha ='$Senha';";
echo $query;

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if ($row > 0) {
	$_SESSION['Nome'] = $Nome;
	header('Location: ../pag_ini/index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login_usu.php');
	exit();
}