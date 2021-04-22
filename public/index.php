<?php

require_once __DIR__ .'/../vendor/autoload.php';
include('../App/config.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use Laminas\Diactoros\Response\RedirectResponse;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequest;

session_start();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();


$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_NAME'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASS'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


$capsule->setAsGlobal();
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);


$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();
//Index del sitio
$map->get('Index','/',[
    "controlador" =>  "App\Http\controllers\indexController",
    "action"      =>  "getIndex"  
]);
//formulario de registro de usuarios
$map->get('Registro','/registro',[
    "controlador" =>  "App\Http\controllers\indexController",
    "action"      =>  "getRegistro"  
]);
//registro de usuarios
$map->post('usuarios.registro','/usuarios/registro',
[
    "controlador" =>  "App\Http\controllers\usuarios\usuariosController",
    "action"      =>  "postRegistro"  
]);
//login de usuario
$map->post('auth','/auth',
[
    "controlador" =>  "App\Http\controllers\authController",
    "action"      =>  "postlogin"  
]);

//cierre de sesion de usuarios
$map->get('logaut','/logaut',
[
    "controlador" =>  "App\Http\controllers\authController",
    "action"      =>  "getLogaut"  
]);
//dashboard de las tareas
$map->get('usuarios','/usuarios',
[
    "controlador" =>  "App\Http\controllers\usuarios\TareaController",
    "action"      =>  "getIndex",
    "auth"        =>  true    
]);
//crear las tareas por parte de los usuarios
$map->post('usuarios.create','/usuarios/tareas',
[
    "controlador" =>  "App\Http\controllers\usuarios\TareaController",
    "action"      =>  "postTarea",
    "auth"        =>  true  
]);
//editar las tareas por parte de los usuarios
$map->get('usuarios.edit','/usuarios/tareas/editar',
[
    "controlador" =>  "App\Http\controllers\usuarios\TareaController",
    "action"      =>  "geteditar",
    "auth"        =>  true  
]);
$map->get('usuarios.delete','/usuarios/delete',
[
    "controlador" =>  "App\Http\controllers\usuarios\TareaController",
    "action"      =>  "eliminar",
    "auth"        =>  true  
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if(!$route)
{ 
    
    $htm = new HtmlResponse('Route Not Found!!', 404);
    return $htm;
}else{
    $handler = $route->handler;
    $ControlerData = $handler['controlador'];
    $metodo = $handler['action'];
    $auth   = $handler['auth'] ?? false;

    $sesionUser = $_SESSION['userID'] ?? null;   
   
    if($auth && !$sesionUser)
    {
        $ControlerData = "App\Http\controllers\authController";
        $metodo        = "getLogaut";
    }
    $controlador = new $ControlerData;
    $response = $controlador->$metodo($request); 

    foreach($response->getHeaders() as $name => $values)
    {
        foreach($values as $value)
        {
              header(sprintf("%s: %s",$name,$value),false); 
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
}
