  <?php
  require_once 'controller/webController.php';
 
  define('ACTION',0);
  define('VALOR1',1);
  define('VALOR2',2);
  define('VALOR3',3);


  if(!isset($_GET['action']))
  $_GET['action'] = '';

  $action = $_GET['action'];
  $partesUrl = explode('/', $action);

  switch ($partesUrl[ACTION]) {
    case 'home':
      $controller = new webController();
      $controller->getHome();
    break;
    case 'get-marcas':
      $controller = new webController();
      $controller->getMarcas();
    break; 
    case 'get-modelos':
      $controller = new webController();
      $controller->getModelos($partesUrl[VALOR1]);
      break; 
    default:
      $controller = new webController();
      $controller->getHome();
      break;
  } 
?>
