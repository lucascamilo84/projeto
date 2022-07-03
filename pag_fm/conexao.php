<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '&reCH1m');
define('DB', 'banco_style');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');