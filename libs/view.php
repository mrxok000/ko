<?php 
class view 
{
	
	function __construct()
	{
		/*echo "<p>Vista Base</p>";*/
	}

	function render($nombre){
		require('view/'.$nombre.'.php');
	}
	
}

 ?>