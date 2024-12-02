<?php

/**
 * 
 */
require_once 'database.php';
class Produto 
{
	private $email;
	private $nome;
	private $telefone;
	private $comentarios;
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getemail(){
		return $this->email ;
	}

	public function setemail($value){
		$this->email =$value;
	}

	public function getnome(){
		return $this->nome ;
	}

	public function setnome($value){
		$this->nome =$value;
	}

	public function getpreco(){
		return $this->preco ;
	}

	public function setpreco($value){
		$this->preco =$value;
	}

	public function cadastrar(){
		
		try{
		$sql="insert into cadastro (nome,email,telefone,comentarios) values (:nome,:email,:telefone,:comentarios)";
			$stmt = $this->db->getConexao()->prepare($sql);
			$ret = $stmt->execute(array("nome"=>$this->getnome(),"email"=>$this->getemail(), "telefone"=>$this->gettelefone(), "comentarios"=>$this->getcomentarios()));
			if ($ret)
				return true;
			else
				return false;

		}catch(Exception $e){
			die($e->getMessage());
		}
	}

}

?>