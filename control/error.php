<?php 

/**
 * 
 */
class e extends controller{
	
	function __construct()
	{
		parent::__construct();
		$this->view->mensaje = "Hubo un error en la solicitud,
		o no existe la pagina que buscas";
		$this->view->render('error/index');
		/*echo "<p>ERROR HDP</p>";*/
	}
}


 ?>