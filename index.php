<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping</title>
    </head>
    <body>
        <?php
        session_start();
        define("DIR", dirname(__FILE__));
        define("DS", DIRECTORY_SEPARATOR);
        
        include_once DIR.DS."App".DS."Loader.php";
        $loader = new \App\Loader();
        $loader->register();
        
        $pdo = new \PDO("mysql:host=localhost;dbname=projeto_final", "root", "");
        $product = new App\Model\Product\ProductRepositoryPDO($pdo);
        $user = new App\Model\User\UserPDO($pdo);
        
        $page = isset($_GET["page"])?$_GET["page"]: "";
        $action = isset($_GET["action"])?$_GET["action"]: "index";
        
        switch ($page){
            case 'cart':
                $session = new App\Model\Shopping\CartSession($pdo);
                $cart = new App\Controller\Cart($product, $session, $user);
                call_user_func_array(array($cart, $action), array());
                break;
            case 'games':
                $games = new App\Controller\Games($product);
                call_user_func_array(array($games, $action), array());
                break;
            case 'register':
                $register = new App\Controller\Register($user);
                call_user_func_array(array($register, $action), array());
                break;
            case 'login':
                $login = new App\Controller\Login($user);
                call_user_func_array(array($login, $action), array());
                break;
            case 'sale':
                $sale = new App\Controller\Sale($product);
                call_user_func_array(array($sale, $action), array());
                break;
            default :
                $home = new App\Controller\Home($product);
                call_user_func_array(array($home, $action), array());
        }
        ?>
    </body>
</html>
