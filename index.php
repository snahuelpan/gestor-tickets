<?php
require_once 'App/Router.php';

use App\Routers\Router as Router;

// Create Router instance
$router = new Router();
$router->get("(/.*)?", function () {
    
});


// Custom 404 Handler
$router->set404('/api(/.*)?', function() {
    header('HTTP/1.1 404 Not Found');
    header('Content-Type: application/json');

    $jsonArray = array();
    $jsonArray['status'] = "404";
    $jsonArray['status_text'] = "route not defined";

    echo json_encode($jsonArray);
});


// Run it!
$router->run();
