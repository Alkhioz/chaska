<?php

use \Firebase\JWT\JWT;

class jwtmanager{
    
private $time;
private $key;

	public function __CONSTRUCT(){
		try{
			$this->time = time();
			/*THISisAlejandro&JoselyneNoTESISdeArimasu*/
			$this->key = 'd32a9b3dfa696a8bfd37a9ae864e536d';
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function encode($data){
		try{
			$token = array(
				'iat' => $this->time, // Tiempo que inició el token
				'exp' => $this->time + (60*60), // Tiempo que expirará el token (+1 hora)
				'data' => [ // información del usuario
					$data
				]
			);
			return JWT::encode($token, $this->key);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	public function decode($jwt){
		try{
			return JWT::decode($jwt, $this->key, array('HS256'));
		}catch(Exception $e){
			die($e->getMessage());
		}
	}

}