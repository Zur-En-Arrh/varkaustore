<!doctype html>
<html lang="pt-br">
  <head>
    <title>VarkauStore - Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
              <?php endif; ?>
          </li>
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
              <h3>CADASTRE-SE!</h3>
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

        <div class="col-10">
          <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Alterar Quantidade</th>
                    <th>Preço</th>
                    <th>Subtotal</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="4"></td>
                <td><b>TOTAL</b></td>
                <td colspan="2"><b>R$<?= number_format($cartTotal, 2, ',', '.');?></b></td>
            </tr>
            <tr>
                <td colspan="6"></td>
                <td><a href="?page=cart&action=finalizar" class="btn btn-success btn-lg btn-block">Relatório da Compra<span><img src="../shopping/App/View/images/full.png" width="50px" height="50px"></span></a></td>
            </tr>
            </tfoot>
            <tbody>
                <?php foreach($cartItem as $item): ?>
                <tr>
                    <td><?= $item->getProduct()->getId(); ?></td>
                    <td class="text-center"><span><img class="rounded-circle" src="../shopping/App/View/images/<?=$item->getProduct()->getFoto()?>" width="200px" height="200px"></span> <?= $item->getProduct()->getNome(); ?></td>
                    <td>
                        <form action="index.php?page=cart&action=update" method="post">
                            <input type="hidden" name="id" value="<?= $item->getProduct()->getId(); ?>"/>
                            <input type="hidden" name="tabela" value="<?= $item->getProduct()->getVendedor(); ?>"/>
                            <input type="number" name="quantity" min="1" value="<?=$item->getQtde();?>" max="<?=$item->getProduct()->getQuantidade();?>"/>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">ALTERAR</button>
                        </form>
                    </td>
                    <td>R$<?= number_format($item->getProduct()->getPreco(), 2, ',', '.'); ?></td>
                    <td>R$<?= number_format($item->getSubtotal(), 2, ',', '.'); ?></td>
                    <td>
                        <a href="index.php?page=cart&action=delete&id=<?= $item->getProduct()->getId(); ?>" class="btn btn-danger"><span><img src="../shopping/App/View/images/remove.png" width="25px" height="25px"></span></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            
            <h2><span><img src="../shopping/App/View/images/welcome.png" width="50px" height="50px"/></span> Mais Vendidos: </h2>
            <div class="row">
                <?php shuffle($bestSellers); foreach($bestSellers as $product): ?>
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
            <?php endforeach; ?>
            </div>
            
            
          </div>
      
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>