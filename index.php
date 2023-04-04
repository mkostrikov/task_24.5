<?php

require __DIR__ . '/vendor/autoload.php';

try {
    $route = $_GET['route'];
    $routes = require __DIR__ . '/src/routes.php';

    $isRouteFound = false;
    foreach ($routes as $pattern => $controllerAndAction)
    {
        preg_match($pattern, $route, $matches);
        if (!empty($matches)) {
            $isRouteFound = true;
            break;
        }
    }

    if ($isRouteFound === false) {
        throw new Exception('Route not found');
    }

    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName;
    $controller->$actionName();

} catch (Exception $e) {
    $view = new \Application\View\View(__DIR__ . '/templates/errors');
    $view->view('404.php', [], 404);
}