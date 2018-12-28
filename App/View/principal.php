<!doctype html>
<html lang="pt-br">
  <head>
    <title>VarkauStore - Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="?page=home">VarkauStore</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="?page=games">Produtos <span><img src="../shopping/App/View/images/products.png" width="20px" height="20px"></span></a>
          </li>
          <li class="nav-item">
              <?php if(isset($_SESSION["user"])): ?>
                <a class="nav-link" href="?page=home#form-sale">Venda <span><img src="../shopping/App/View/images/sell.png" width="20px" height="20px"></span></a>
              <?php else: ?>
                <a class="nav-link" href="?page=home#form-register">Cadastro <span><img src="../shopping/App/View/images/register.png" width="20px" height="20px"></span></a>
              <?php endif; ?>          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=cart">Carrinho <span><img src="../shopping/App/View/images/basket.png" width="20px" height="20px"></span></a>
          </li>
          <?php if(isset($_SESSION["user"])): ?>
          <li class="nav-item"><span class="navbar navbar-text"><?=isset($_SESSION["admin"])?'Administrador':'Usuário'?>: <?= $_SESSION["user"]; ?></span></li>
          <li class="nav-item"><a class="btn btn-danger" href="?page=login&action=deslogar">Log-off</a></li>
        <?php endif; ?>
        </ul>

        <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=games&action=research">
          <select class="form-control" name="order">
            <option value="preco">Preço</option>
            <option value="nome">Alfabético</option>
          </select>
          <input class="form-control mr-sm-2" name="research" type="search" placeholder="Pesquisar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#form-register">
                <img class="d-block w-100" src="../shopping/App/View/images/banner-cadastro.jpg" alt="First slide">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h3><?php if(isset($_SESSION["user"])) echo "Bem-Vindo à VarkauStore!"; else echo "CADASTRE-SE!";?></h3>
              <p>Venda Produtos e participe da comunidade.</p>
            </div>
          </div>
          <div class="carousel-item">
            <a href="#">
                <img class="d-block w-100" src="../shopping/App/View/images/banner-vendas.jpg" alt="Second slide">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h3>NÃO QUER MAIS UM JOGO?</h3>
              <p>Cadastrados na VarkauStore podem vender seus jogos se assim desejarem.</p>
            </div>
          </div>
          <div class="carousel-item">
              <a href="#">
                  <img class="d-block w-100" src="../shopping/App/View/images/banner-promocao.jpg" alt="Third slide">
              </a>
              <div class="carousel-caption d-none d-md-block">
              <h3>Grande Inauguração!</h3>
              <p>Vindo no dia 30 de Novembro!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <br>

      <div class="row justify-content-md-center">
        <div class="col-2">
          <h3>Plataformas</h3>
          <ul class="list-group">
            <li class="list-group-item"><a href="?page=games&action=platform&platform=PS4">PlayStation 4</a></li>
            <li class="list-group-item"><a href="?page=games&action=platform&platform=PS3">PlayStation 3</a></li>
            <li class="list-group-item"><a href="?page=games&action=platform&platform=XboxOne">Xbox One</a></li>
            <li class="list-group-item"><a href="?page=games&action=platform&platform=Xbox360">Xbox 360</a></li>
            <li class="list-group-item"><a href="?page=games&action=platform&platform=PC">PC</a></li>
            <li class="list-group-item"><a href="?page=games&action=platform&platform=WiiU">Wii U</a></li>
            <li class="list-group-item"><a href="?page=games&action=platform&platform=Switch">Switch</a></li>
          </ul>
          <br>
          <h3>Gêneros</h3>
          <ul class="list-group">
            <li class="list-group-item"><a href="?page=games&action=filter&genero=Luta">LUTA</a></li>
            <li class="list-group-item"><a href="?page=games&action=filter&genero=Aventura">AVENTURA</a></li>
            <li class="list-group-item"><a href="?page=games&action=filter&genero=RPG">RPG</a></li>
            <li class="list-group-item"><a href="?page=games&action=filter&genero=RTS">RTS</a></li>
            <li class="list-group-item"><a href="?page=games&action=filter&genero=Esporte">ESPORTE</a></li>
            <li class="list-group-item"><a href="?page=games&action=filter&genero=Tiro">TIRO</a></li>
            <li class="list-group-item"><a href="?page=games&action=filter&genero=Puzzle">PUZZLE</a></li>
            <li class="list-group-item"><a href="?page=games&action=users">USUÁRIOS</a></li>
          </ul>
        </div>

        <div class="<?php if(isset($_SESSION["admin"])):?> col-10 <?php else:?> col-8 <?php endif;?>">
            
            <?php if(!isset($_SESSION["admin"])): ?><h2><span><img src="../shopping/App/View/images/welcome.png" width="50px" height="50px"/></span> Recomendados para você: </h2> <?php endif; ?>
          <div class="row">
            <?php shuffle($products); $i = 0; foreach($products as $product): ?>
                  <div class="col-md-4 card border-0" style="margin-bottom: 5px;">
                      <img class="card-img-top" width="400px" height="300px" src="../shopping/App/View/images/<?= $product->getFoto(); ?>" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title"><?= $product->getNome(); ?></h4>
                      <h6 class="card-subtitle">R$<?= number_format($product->getPreco(), 2, ',', '.'); ?></h6>
                    </div>
                    <div class="card-footer bg-white">
                        <?php if(isset($_SESSION["admin"])): ?>
                        <a href="index.php?page=games&action=display&id=<?= $product->getId(); ?>" class="btn btn-warning btn-block">Alterar Dados</a>
                        <a href="index.php?page=games&action=delete&id=<?= $product->getId(); ?>" class="btn btn-danger btn-block">Apagar Produto</a>
                        <?php else: ?>
                        <a href="index.php?page=games&action=display&id=<?= $product->getId(); ?>" class="btn btn-primary btn-block">Ver Detalhes</a>
                        <?php endif;?>
                    </div>
                  </div>
            <?php
            
            $i++;
            
            if ($i == 6) {
                break;
            }
            
            endforeach; ?>
            
          </div>

<br>

<?php if(!isset($_SESSION["user"])): ?>
          <h3>Cadastro do Usuário:</h3>

          <form action="?page=register&action=cadastrar" method="post" id="form-register" class="form-horizontal">
            <!--Nome Completo-->
            <?php if(isset($_SESSION["erros"]["nome"])): ?>
            <div class="panel-body">
            <div class="alert alert-block alert-warning">
                <h4>
                    Nome Preenchido Incorretamente!
                </h4>
            </div>
            </div>
            <?php endif; ?>
        <div class="form-group">
        <label for="inputNome3" class="col-sm-2 control-label">Nome: </label>
        <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" id="inputNome3" placeholder="Nome Completo">
        </div>
        </div>
        <!--Email Completo-->
        <?php if(isset($_SESSION["erros"]["email"])): ?>
            <div class="alert alert-block alert-warning">
                <h4>
                    Email Preenchido Incorretamente!
                </h4>
            </div>
            <?php endif; ?>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email: </label>
          <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="email@dominio.com">
          </div>
        </div>
        
        <!--Username-->
        <?php if(isset($_SESSION["erros"]["username"])): ?>
            <div class="alert alert-block alert-warning">
                <h4>
                    Username Preenchido Incorretamente!
                </h4>
            </div>
            <?php endif; ?>
        <div class="form-group">
        <label for="inputNome3" class="col-sm-2 control-label">Username: </label>
        <div class="col-sm-10">
            <input type="text" name="username" class="form-control" id="inputNome3" placeholder="Username">
        </div>
        </div>
        <!--Senha-->
        <?php if(isset($_SESSION["erros"]["senha"])): ?>
            <div class="alert alert-block alert-warning">
                <h4>
                    Senha Preenchida Incorretamente!
                </h4>
            </div>
            <?php endif; ?>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Senha: </label>
          <div class="col-sm-10">
            <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Sua Senha">
          </div>
        </div>
        <!--Botão Submit-->
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Cadastrar-se</button>
          </div>
        </div>
      </form>
          
<?php else: ?>
          <h3>Cadastro de Produtos</h3>
          <form id="form-sale" action="?page=sale&action=vender" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="prod_nome">Nome: </label>
                <div class="col-sm-10">
                    <input class="form-control" id="prod_nome" type="text" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="prod_price">Preço: </label>
                <div class="col-sm-10">
                    <input class="form-control" id="prod_price" type="text" name="preco">
                </div>
            </div>
            <div class="form-group">
                <label for="prod_genre" class="col-sm-2 control-label">Gênero: </label>
                <div class="col-sm-10">
                    <select name="genero" id="prod_genre" class="form-control">
                        <option value="">Escolha um Gênero</option>
                        <option value="Aventura">Aventura</option>
                        <option value="RPG">RPG</option>
                        <option value="Tiro">Tiro</option>
                        <option value="RTS">RTS</option>
                        <option value="Puzzle">Puzzle</option>
                        <option value="Esporte">Esporte</option>
                        <option value="Luta">Luta</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="prod_publisher">Publicadora: </label>
                <div class="col-sm-10">
                    <input class="form-control" id="prod_publisher" type="text" name="publicadora">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="prod_quantity">Quantidade: </label>
                <div class="col-sm-10">
                    <input min="1" class="form-control" id="prod_quantity" type="number" name="qtde">
                </div>
            </div>
              
              <div class="form-group">
                  <label class="col-sm-2 control-label" for="prod_description">Descrição(Opcional): </label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="descricao" id="prod_description" maxlength="200" placeholder="Insira uma descrição"></textarea>
                </div>
              </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Plataformas: </label>
                <div class="col-sm-10"> 
            <label class="checkbox-inline"><input type="checkbox" name="XboxOne" value="XboxOne">Xbox One</label>
            <label class="checkbox-inline"><input type="checkbox" name="PS4" value="PS4">PS4</label>
            <label class="checkbox-inline"><input type="checkbox" name="PC" value="PC">PC</label>
            <label class="checkbox-inline"><input type="checkbox" name="PS3" value="PS3">PS3</label>
            <label class="checkbox-inline"><input type="checkbox" name="Xbox360" value="Xbox360">Xbox 360</label>
            <label class="checkbox-inline"><input type="checkbox" name="Switch" value="Switch">Switch</label>
            <label class="checkbox-inline"><input type="checkbox" name="WiiU" value="WiiU">Wii U</label>
                </div>
            </div>
            
                <label for="prod_picture" class="col-sm-2 control-label">Foto: </label>
                <input id="prod_picture" type="file" name="foto"> <br>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">VENDER</button>
                    </div>
                </div>
	</form>
<?php endif; ?>

        </div>

          <?php if(!isset($_SESSION["user"])): ?>
        <div class="col-2">

          <div class="card">
            <div class="card-body">
              <form class="form-horizontal" action="?page=login&action=logar" method="post">
                <h4 class="card-title">LOGIN</h4>
                <?php if(isset($_SESSION["login"])): ?>
                <div class="alert alert-warning">
                    <small>Usuário não encontrado.</small>
                </div>
                <?php endif; ?>
                  <input class="form-control" name="username" type="text" placeholder="Username"> <br>
                  <input class="form-control" name="senha" type="password" placeholder="Password"> <br>
                  <button class="btn btn-outline-success" type="submit">Login</button>
              </form>
            </div>
          </div>
        </div>
          <?php endif; ?>
          
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
    <?php if(isset($_SESSION["user"])): ?>
    <script type="text/javascript" src="../shopping/App/View/javascript/validacao-cadastro-produtos.js"></script>
    <?php else: ?>
    <script type="text/javascript" src="../shopping/App/View/javascript/validacao-cadastro-usuarios.js"></script>
    <?php endif; ?>
  </body>
</html>