<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = " SELECT * FROM funcionario WHERE id=$id";

    $reult = $conexao->query($sqlSelect);

    if ($reult->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($reult)) {
            $Nome = $user_data['nome'];
            $Email = $user_data['email'];
            $Senha = $user_data['senha'];
            $Cargo = $user_data['cargo'];
        }
    } else {
        header("Location: ");
    }
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login Funcionario</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="saveEdit.php" method="POST">
                            <h3 class="text-center text-info">Editar Funcionario</h3>
                            <div class="form-group">
                                <label for="Email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $Email ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Nome" class="text-info">Username:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $Nome ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $Senha ?>">
                            </div>
                            <div class="group" value="<?php echo $Cargo ?>">
                                <label for="cargo" class="label">Cargo</label>
                                <select id="cargo" name="cargo">
                                    <option value="programador">programador</option>
                                    <option value="gerente">gerente</option>
                                    <option value="funcionario">funcionario</option>
                                </select> </br>
                            </div></br>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Editar">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>