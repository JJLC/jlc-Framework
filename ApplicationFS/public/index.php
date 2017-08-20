<?php

session_start();

header('Content-Type: text/html; charset=utf-8');

chdir(dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

if (getenv('APPLICATION_ENV') == 'development')
	$appConfig = require __DIR__ . '/../config/development.config.php';
	else
		$appConfig = require __DIR__ . '/../config/application.config.php';
		
$modules = require __DIR__ . '/../config/modules.config.php';
		
include __DIR__ . '/../modules/Application/views/Application/layout.phtml';