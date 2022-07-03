<?php
 
if ($_SESSION['usuario'] == 'usuario') {
  include_once('conexao.php');
  header('Location:../index.php');
  exit();
}

?>

<body>
  <?php
  if ($_SESSION['cargo'] == 'programador') {
  ?>
    <a href="cadfun.php"><button>Adicionar Novos Funcionarios</button></a>
    <a href=""><button>Excluir e Editar Funcionarios</button></a>
  <?php
  }
  ?>

</body>