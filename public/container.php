<?php
$container = $app->getContainer();

$container['view'] = function() {
    $view = new \League\Plates\Engine('../views');
    return $view;
};