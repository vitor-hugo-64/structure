<?php

require_once('vendor/autoload.php');

use \Slim\App;
use \ST\Page;

$config = array( 'settings' => array( 'addContentLengthHeader' => false), 'debug' => true);

$app = new App($config);

$app->get( '/', function ()
{
	echo "Hello Wolrd!";
});

$app->run();