<?php 
	
	/**
	 * 
	 */
	class database /*extends AnotherClass*/
	{
		
		private $host;
		private $db;
		private $user;
		private $password;
		private $charset;

		public function __construct()
		{
			$this->host = constant('HOST');
			$this->db = constant('DB');
			$this->user = constant('USER');
			$this->password = constant('PASSWORS');
			$this->charset = constant('CHARSET');
		}


		function conet(){
			
		}
	}

 ?>