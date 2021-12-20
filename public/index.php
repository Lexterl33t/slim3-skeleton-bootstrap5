<?php

require '../vendor/autoload.php';

$app = new \Slim\App([
   'settings' => [
       'displayErrorDetails' => true
   ]
]);

require 'container.php';

require 'routes.php';

$app->run();