<?php

require_once '../models/database.php';

class user
{
	private $pdo;
	private $username;
	private $password;

	public function __CONSTRUCT()
	{
		try{
			$this->pdo = Database::StartUp();     
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
			$stmt = $this->pdo->prepare("SELECT * FROM user 
				WHERE email = ? and password = ?");
			$stmt->execute(
					array( 
						$this->username,
						$this->password
					)
				);
			header('Content-Type: application/json');	 
			return json_encode($stmt->fetchAll(PDO::FETCH_OBJ));;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

}