<?php 

/**
 * 
 */
class Main extends controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->render('main/index');
		/*echo "<p>Nuevo Controlador Main</p>";*/
	}

	function saludo(){
		echo "<p>HOLA ejecustaste el metodo saludo</p>";
	}
}

 ?>