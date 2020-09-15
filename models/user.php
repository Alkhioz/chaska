<?php

require_once '../models/database.php';
require_once '../models/jwtmanager.php';

class user
{
	private $pdo;
	private $username;
	private $password;
	private $jwtmanager;

	public function __CONSTRUCT()
	{
		try{
			$this->pdo = Database::StartUp();
			$this->jwtmanager = new jwtmanager();   
		}catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function login(){
		try{
			/*$stmt = $this->pdo->prepare("SELECT * FROM user 
				WHERE email = ? and password = ?");*/
			$stmt = $this->pdo->prepare("SELECT * FROM user 
				WHERE email = ?");	
			$stmt->execute(
					array( 
						$this->username,
						/*$this->password*/
					)
				);
			$result = json_encode($stmt->fetchAll(PDO::FETCH_OBJ));
			$this->pdo=null;
			header('Content-Type: application/json');	 
			/*return $this->jwtmanager->encode($result);*/
			return 'logueado';
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	/*public function comprobar_tocken(){
		try{	 
			$result =$_REQUEST['key'];
			return $this->jwtmanager->decode($result);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}*/

}