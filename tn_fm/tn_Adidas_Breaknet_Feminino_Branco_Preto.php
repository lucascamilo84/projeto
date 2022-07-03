<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link rel="stylesheet" href="tn_Adidas_breaknet_Branco_Preto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<?php 
?>


<body>

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
                        <a class="nav-link" href="#">Entrar</a>
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

                    <!-- Badge -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">

                            <span class="badge badge-pill bg-danger">1</span>

                            <span><i class="fas fa-shopping-cart"></i></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                    </li>



                </ul>
                <form action="pesquisar.php" name="pesquisar" method="POST" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" name="id" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>





    <div class="pagina">
        <div class="container-sm"></div>
        <h2 class="titulo">Tênis Adidas
            Breaknet Feminino
            - Branco+Preto
        </h2>

        <div class="tenis">
            <img src="/tcc/imagens/AdidasBreaknetFemininoBrancoPreto.png" width="300px" height="300px">
            <ul>
                <li> <img src="/tcc/imagens/adidasbreaknet.png" width="55px" height="55px" id='adidasbreaknet'></li>
                <li> <img src="/tcc/imagens/adidasbreaknet_lado.png" width="55px" height="55px" id='adidasbreaknet_lado'></li>
                <li><img src="/tcc/imagens/adidasbreaknet_traz.png" width="55px" height="55px" id='adidasbreaknet_traz'></li>
                <li> <img src="/tcc/imagens/adidasbreaknet_cima.png" width="55px" height="55px" id='adidasbreaknet_cima'></li>

            </ul>

            <img src="" id='trocaimg'>
            <input type="button" id='anterior' onclick="img_p();">
            <input type="button" id="proximo" onclick="img_n()">
        </div>
        <div class="Descricao_lista">
            <ul>
                <li><strong>Departamento BS:</strong> Esporte</li>
                <li><strong>Indicado para:</strong> Dia a Dia</li>
                <li><strong> Estilo da Peça:</strong> Com logo</li>
                <li><strong>Material:</strong> Sintético</li>
                <li><strong>Material Interno:</strong> Têxtil</li>
                <li><strong>Altura do Cano:</strong> Cano Baixo</li>
                <li><a href="" class="ver">ver mais </a></li>

            </ul>
        </div></br>


        <div class="frete">
            <p class="gratis">FRETE GRÁTIS</p>
            <R1 class="desconto" style="text-decoration: line-through"> R$ 250,00</R1>
            <div class="preco">
                <R1>R$ 199,99</R1>

                <p>até 5x de R$ 40,00 sem juros</p>
            </div>
            <P> <strong>Cor:</strong> Branco e Preto</P>
        </div></br>



        <div class="imagens">
            <h2>Outras opcoes de tênis:</h2>
            <a href="#"><img src="/tcc/imagens/adidasbreaknet_branco_bege.png" width="55px" height="55px"></a>
            <a href="#"><img src="/tcc/imagens/adidasbreaknet_branco_prata.png" width="55px" height="55px"></a>
            <a href="#"><img src="/tcc/imagens/adidasbreaknet_detalhado.png" width="55px" height="55px"></a>
            <a href="#"><img src="/tcc/imagens/adidasbreaknet_dourado_branco.png" width="55px" height="55px"></a>
            <a href="#"><img src=""></a></br>
        </div>
        <div class="tamanho">
            <p>Tamanho:</p>

            <button class="34">34</button>
            <button class="35">35</button>
            <button class="36">36</button>
            <button class="37">37</button>
            <button class="38">38</button>
            <button class="39">39</button>

            </br>
        </div> </br>
        <div class="prazo">
            <a href="../pag_inicial/carrinho.php?id=<?php echo $id;?>">
                <button class="comprar">Comprar</button>
             
            </a>
            <label for="">Consulte o prazo de entrega</label></br>
            <input type="text" class="entrega"></br>
            <input type="submit" class="consultar" value="Consultar">
        </div>
        <div class="descricao">
            <div class="hr"></div>
            <h2>Descrição</h2>
            <p>Com modelo clássico, o Tênis Adidas Feminino Breaknet traz as listras icônicas da marca em cores lisas e
                também animal print.
                É confeccionado com material macio e durável, perfuros para respirabilidade, forro acolchoado e solado
                resistente ao desgaste.
                Conte com a Adidas para complementar o seu look urbano em grande estilo!</p> </br>

            <div class="desc1">
                <ul>
                    <li><strong>Tênis Adidas Breaknet Feminino</strong></li>
                    <li><strong>Gênero:</strong> Feminino</li>
                    <li><strong>Departamento BS:</strong> Esporte</li>
                    <li><strong>Indicado para:</strong> Dia a Dia</li>
                    <li><strong>Estilo da Peça:</strong> Com logo</li>
                    <li><strong>Material:</strong> Sintético</li>
                    <li><strong>Material Interno:</strong> Têxtil</li>
                </ul></br>
            </div></br>

            <div class="desc2">
                <ul>
                    <li><strong>Altura do Cano:</strong> Cano Baixo</li>
                    <li><strong>Fechamento:</strong> Cadarço</li>
                    <li><strong>Solado:</strong> Borracha</li>
                    <li><strong>Composição Cabedal:</strong> Couro sintético, forro acolchoado e fechamento em cadarço.
                    </li>
                </ul>
            </div></br>
            <div class="desc3">
                <ul>
                    <li><strong>Peso do Produto:</strong> 310 g (O peso do produto varia de acordo com a númeração)</li>
                    <li><strong>Garantia do Fabricante:</strong> Contra Defeito de Fabricação</li>
                    <li><strong>Origem:</strong> Estrangeira - Adquirida no mercado interno</li>
                    <li><strong> Marca:</strong> Adidas</li>
            </div></br>

            </ul></br>
            <h1>AVALIAÇÕES DOS CLIENTES</h1>
            <div class="hr"></div>
            <p class="ajuda">Ajuda</p>
            <div class="ajuda">
                <ul>
                    <li>Trocas e devoluções</li>
                    <li>Entregas</li>
                    <li>Minha Conta</li>
                    <li>Pagamentos</li>
                    <li>Como Comprar</li>
                </ul></br>
            </div>
        </div>
        <script src="tn_Adidas_breaknet_Branco_Preto.js"></script>
</body>

</html>