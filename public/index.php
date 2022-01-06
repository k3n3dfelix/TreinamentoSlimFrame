<?php 

require "../bootstrap.php";

use Slim\Http\Request;
use Slim\Http\Response;

//Agrupamento de URI
// $app->group("/admin",function() use ($app){
//     $app->get('/login',function(){
//         echo "Home";
//     });
// });

// $app->get('/',function(Request $request, Response $response, array $args){
//     print_r($response);
// });

$app->get('/','app\controllers\HomeController:index');




$app->run();