<?php 

function db_connect(){
	$pdo = null;
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=world','admin','admin');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		 echo 'Connection failed: ' . $e->getMessage()."\n";
	}
	return $pdo;
}

function db_getCities(){
	$pdo = db_connect();
	try{
		$pdo = db_connect();
		$stmt = $pdo->prepare(		
									'SELECT c.name, c.district '.
									'FROM city c;');
		$stmt->execute();
		$result = $stmt->fetchall();
		
		return $result;
	}catch(PDOException $e){
		echo 'exception 1';
		echo $e->getMessage();
	}
}

?>