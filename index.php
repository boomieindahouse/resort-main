<?php
    require_once 'vendor/autoload.php';
    $router = new AltoRouter();
    
    //front-end
    $router->map('GET', '/', function () {
        require __DIR__ . '/views/homepage.php';
    });
    $router->map('GET', '/signin', function () {
        require __DIR__ . '/views/signin.php';
    });
    $router->map('GET', '/admin/dashboard', function(){
        require __DIR__ . '/views/admin/dashboard.php';
    });
    $router->map('GET', '/admin/edit_room', function(){
        require __DIR__ . '/views/admin/edit_room.php';
    });
    $router->map('GET', '/admin/dashboard', function(){
        require __DIR__ . '/views/admin/edit_room.php';
    });
    
    

    //back-end
    $router->map('POST', '/signin_db', function () {
        require __DIR__ . '/controller/signin_db.php';
    });
    $router->map('GET', '/logout', function () {
        require __DIR__ . '/controller/logout_db.php';
    });


    $match = $router->match();

// Here comes the new part, taken straight from the docs:

// call closure or throw 404 status
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    require __DIR__ . '/views/404page.php';
}
?>