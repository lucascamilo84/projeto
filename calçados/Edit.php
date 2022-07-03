<?php
if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = " SELECT * FROM calcados WHERE id=$id";

    $reult = $conexao->query($sqlSelect);

    if ($reult->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($reult)) {
            $Nome = $user_data['nome'];
            $Marca = $user_data['marca'];
            $Tamanho = $user_data['tamanho'];
            $Genero = $user_data['genero'];
            $Tipo = $user_data['tipo'];
            $Quantidade = $user_data['quantidade'];
            $Preco = $user_data['preco'];
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
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="salvar.php" method="POST">
                            <h3 class="text-center text-info">Calcados </h3>
                            <div class="form-group">
                                <label for="Email" class="text-info">Nome</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $Nome ?>">
                            </div>
                            <div class="form-group">
                                <label for="Nome" class="text-info">Marca</label><br>
                                <input type="text" name="marca" id="marca" class="form-control" value="<?php echo $Marca ?>">
                            </div>
                            <div class="form-group">
                                <label for="tamanho">Tamanho</label></br>
                                <select id="tamanho" name="tamanho" value="<?php echo $Tamanho ?>">
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                </select> </br>
                            </div>
                            <label for="Genero">Genero</label></br>
                            <select id="Genero" name="Genero" <?php echo $Genero ?>>
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Infantil">Infantil</option>
                            </select> </br>
                            <label for="Tipo">Tipo</label></br>
                            <select id="Tipo" name="Tipo" <?php echo $Tipo ?>>
                                <option value="Casual">Casual</option>
                                <option value="Canoalto">Cano alto</option>
                                <option value="Sapatenis">Sapatênis</option>
                                <option value="Esportivo">Esportivo</option>
                                <option value="Academia">Academia</option>
                                <option value="Aventura">Aventura</option>
                            </select> </br>

                            <label for="Quantidade">Quantidade</label></br>
                            <input type="number" id="Quantidade" name="Quantidade" placeholder="Quantidade de tênis" <?php echo $Quantidade ?> /></br>

                            <label for="Preco">Preco</label></br>
                            <input type="text" id="preco" name="preco" placeholder="preço do  tênis" <?php echo $Preco ?>/></br>


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