<?php
    require_once 'vendor/autoload.php';
    $router = new AltoRouter();
    
    //front-end
    $router->map('GET', '/', function () {
        require __DIR__ . '/views/homepage.php';
      
    });
    $router->map('GET', '/signup', function () {
        require __DIR__ . '/views/signup.php';
     
    });
    $router->map('GET', '/booking', function () {
        echo "this is booking";
     
    });


    //back-end
    $router->map('POST', '/signup_db', function () {
        require __DIR__ . '/controller/signup_db.php';
    });


    $match = $router->match();

// Here comes the new part, taken straight from the docs:

// call closure or throw 404 status
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo "404";
}
?>