<?php
    require __DIR__ . '/vendor/autoload.php';
    include "Test.php";
    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;

    function processInput($uri){        
        $uri = implode('/', 
            array_slice(
                explode('/', $_SERVER['REQUEST_URI']), 3));         

            return $uri;    
    }

    $router = new RouteCollector();
    
    $router->controller('/', 'Index');
    $router->controller('/test', 'Test');
    $router->controller('/page', 'Page');

    $dispatcher = (new Dispatcher($router->getData()));

    echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
    //$dispatcher->dispatch('GET', '/page'); //PAGE - ANY index
    //$dispatcher->dispatch('POST', '/page'); //PAGE - ANY index
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
