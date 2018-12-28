<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
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

<br>
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


        <div class="col-10">
          
          <table class="table">
                <thead>
                <td>Cliente: </td> 
                <td colspan="3"><i><?= $_SESSION["user"]; ?></i></td>
                </thead>
                <tr>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Preço Unitário</td>
                    <td>Subtotal</td>
                </tr>
                <?php foreach ($items as $key => $value): ?>
                <tr>
                    <td><?= $items[$key]->getProduct()->getNome(); ?></td>
                    <td><?= $items[$key]->getQtde(); ?></td>
                    <td>R$<?= number_format($items[$key]->getProduct()->getPreco(), 2, ',', '.')?></td>
                    <td>R$<?= number_format($items[$key]->getSubtotal(), 2, ',', '.')?></td>
                </tr>
                <?php endforeach; ?>
                
                <tfoot>
                <td colspan="3">TOTAL COMPRADO</td>
                <td>R$<?= number_format($total, 2, ',', '.'); ?></td>
                <tr>
                    <td colspan="3"></td>
                    <td>
                        <!--API Pag Seguro-->
                    <!-- Declaração do formulário -->  
                <form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
                    <!-- Campos obrigatórios -->  
                    <input name="receiverEmail" type="hidden" value="suporte@lojamodelo.com.br">  
                    <input name="currency" type="hidden" value="BRL">  

                    <?php $i = 1; foreach ($items as $key => $value):?>
                    <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
                    <input name="itemId<?=$i;?>" type="hidden" value="<?=$items[$key]->getProduct()->getId()?>">  
                    <input name="itemDescription<?=$i?>" type="hidden" value="<?=$items[$key]->getProduct()->getNome()?>">  
                    <input name="itemAmount<?=$i;?>" type="hidden" value="<?=number_format($items[$key]->getProduct()->getPreco(), 2, '.', '');?>">  
                    <input name="itemQuantity<?=$i;?>" type="hidden" value="<?=$items[$key]->getQtde();?>">   
                    <?php $i++; endforeach;?>

                    
                    <!-- Dados do comprador (opcionais) -->  
                    <input name="senderName" type="hidden" value="<?= $user->getNome() ?>">
                    <input name="senderEmail" type="hidden" value="<?= $user->getEmail() ?>">
                    
                    <!-- Código de referência do pagamento no seu sistema (opcional) -->  
                    <input name="reference" type="hidden" value="REF1234">  
                    <button type="submit" class="btn btn-success btn-lg">Finalizar Compra <span><img src="../shopping/App/View/images/full.png" width="50px" height="50px"></span></button>
                </form>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>

        </div>

          </div>
        </div>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>