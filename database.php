<?php

/**
 * 
 */
class Database
{

	function __construct()
	{
		$host ="localhost"; 
		$database ="doces"; 
		$username ="root"; 
		$password  =""; 
		try {
			$this->conexao = new PDO("mysql:host=$host;dbname=$database",$username,$password);
		} catch (Exception $e) {
			die($e->getMessage());
		}
		
	}
	function __destruct(){
		$this->conexao =NULL;
	}

	public function getConexao(){
		if($this->conexao != NULL)
			return $this->conexao;
		else 
			return NULL;
	}
}


?>