<?php
namespace Klassroom\model;
require_once __DIR__ . '/../../config/server.php';
use PDO;
use PDOException;
use Exception;

class MainModel{
	private $server= DB_SERVER;
	private $db= DB_NAME;
	private $user= DB_USER;
	private $password= DB_PASSWORD;
	
	protected function getConnection(): PDO {
        try {
			$dsn= "mysql:host={$this->server};dbname={$this->db};charset=utf8mb4";			
            $pdo= new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
            return $pdo;
        } catch (PDOException $e) {
			//No olvidar mandarlo a un archivo LOGS
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }
	
	protected function executeQuery($query, array $params= []){
		$pdo= $this-> getConnection();
		//instruction SQL prepared
		$stmt= $pdo->prepare($query);
		$stmt->execute($params);		
		return $stmt;
	}
}