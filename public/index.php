<?php
require_once __DIR__.'/../vendor/autoload.php';

#start silex application.
$app = new Silex\Application();

#set service provider
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../app/view',
));

#require route.php.
require_once __DIR__.'/../app/routes.php';

#run
$app->run();
