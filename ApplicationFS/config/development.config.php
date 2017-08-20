<?php
return [
		'modules' => require __DIR__ . '/modules.config.php',
		'module_paths' => [
				'./modules',
				'./vendor',
		],
		'db' => [
				'driver'=> '',
				'dsn'	=> '',
				'user'	=> '',
				'pass'	=> '',
		],
		'home' => 'index.phtml',
		'Company' => [
				'name' => '',
				'shortname' => '',
				'color1' => '',
				'color2' => '',
		],
		'keys' => [
				
		],
];