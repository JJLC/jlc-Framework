<?php

namespace jlcFW\MVC;

class Routes
{
	private $module;
	private $controller;
	private $action;
	
	public function __construct($module,$controller,$action)
	{
		$this->module = $module;
		$this->controller = $controller;
		$this->action = $action;
	}
	
	function call()
	{
		if ($controller == '')
			require_once 'modules/'.$module.'/views/index.phtml';
			else
				{
					$arrayTemp = array();
					$arrayTemp = explode("/", $controller);
					switch ($arrayTemp[0])
					{
						case 'models'	:	require_once 'modules/'.$module.'/'.$controller.'/'.$action.'.php';
											break;
						case 'reports'	:	require_once 'reports/'.$action.'.php';
											break;
						case 'repFiles'	:	require_once 'public/tempfiles/'.$action.'.pdf';
											break;
						default			:	require_once 'modules/'.$module.'/views/'.$controller.'/'.$action.'.phtml';
											break;
				}
			}
	}
	
}
?>