<?php 

/**
 * 
 */
class nuevo extends controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->render('nuevo/index');
		/*echo "<p>Nuevo Controlador Main</p>";*/
	}

	
}

 ?>