<?php 

/**
 * 
 */
require_once 'control\error.php';

class App
{
	
	function __construct()
	{
		/*echo "<p>Nueva App</p>";*/

		$url = isset($_GET['url']) ? $_GET['url']:null;

		$url = rtrim($url, '/');

		$url = explode('/', $url);


		/*var_dump($url);*/

		if (empty($url[0])) {
			$archivoController = 'control/main.php';
			require_once $archivoController;
			$controller = new Main();
			return false;
		}

		$archivoController = 'control/'.$url[0].'.php';

		if(file_exists($archivoController)) {
			require_once $archivoController;
			$controller = new $url[0];

			if (isset($url[1])) {
				$controller->{$url[1]}();
			}
		}else{
			$controller = new e();
		}
		



		
	}
}


 ?>