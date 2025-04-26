<?php

$routes = require_once basePath('routes.php');



if(array_key_exists($cleanedUrl, $routes)) {
    require_once  basePath($routes[$cleanedUrl]) ;
}else{
    http_response_code(404);
    echo '404 Not Found';
}
