<!DOCTYPE html>
<html lang="en">

<head>

    <title>PAGINA 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<?php
include 'conexao.php';
$calcados = "SELECT * FROM calcados";
$calcado = mysqli_query($conexao, $calcados);
session_start();
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Style</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/tcc/login/login_usu.php">Início <span class="sr-only">(página atual)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Masculino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Feminino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Infantil</a>
                </li>

                <?php
                if (empty($_SESSION['id'])) {  ?>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/logout.php">Sair</a>
                    </li>
                <?php    } else { ?>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/logout.php">Entrar</a>
                    </li>
                <?php }
                ?>

                <!-- Badge -->
                <li class="nav-item">
                    <a class="nav-link" href="#">

                        <span class="badge badge-pill bg-danger"></span>

                        <span><i class="fas fa-shopping-cart"></i></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </li>



            </ul>
            <form action="pesquisa.php" name="pesquisar" method="POST" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="txtpesquisar" placeholder="Pesquisar" name="id" aria-label="Pesquisar">
                <button name="buttonPesquisar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
</header>
<main>
<div class="text-center">
        <h1>Os calçados Mais vendidos</h1>
        <div class="">
       
    </div>
    <div class="text-center">
        <h1>Novidades Style</h1>
       
    </div>
    <div class="text-center">
        <h1>Promoções da semana</h1>
    
        </div>
  

</main>
<script src="index.js"></script>


</body>

</html>