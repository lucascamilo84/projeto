<link rel="stylesheet" href="entrar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Cadastrar Calçado</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="grava_calcados.php" method="POST">
                            <h3 class="text-center text-info">Cadastrar Funcionario</h3>
                            <div class="form-group">
                                <label for="Nome do Calçado" class="text-info">Nome do Calçado:</label><br>
                                <input type="text" name="Nome" id="Nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Nome do Calçado" class="text-info">Marca do Calçado:</label><br>
                                <input type="text" name="Marca" id="Marca" class="form-control">
                            </div>
                      
                            <div class="group">
                                <label for="cargo" class="text-info">Tamanho</label>
                                <select id="Tamanho" name="Tamanho" class="form-control">
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
                            </div></br>
                            <div class="group">
                                <label for="Genero" class="text-info">Genero</label>
                                <select id="Genero" name="Genero" class="form-control">
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Infantil">Infantil</option>
                                </select> </br>
                            </div></br>
                            <div class="group">
                                <label for="Tipo" class="text-info">Tipo</label>
                                <select id="Tipo" name="Tipo" class="form-control">
                                    <option value="Casual">Casual</option>
                                    <option value="Canoalto">Cano alto</option>
                                    <option value="Sapatenis">Sapatênis</option>
                                    <option value="Esportivo">Esportivo</option>
                                    <option value="Academia">Academia</option>
                                    <option value="Aventura">Aventura</option>
                                </select> </br>
                            </div></br>
                            <div class="form-group">
                                <label for="Quantidade" class="text-info">Quantidade</label><br>
                                <input type="number" name="Quantidade" id="Quantidade" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Preço" class="text-info">Preço</label><br>
                                <input type="text" name="preco" id="preco" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastrar">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



