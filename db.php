<?php 


	try {
		$connection = new PDO('mysql:host=localhost;dbname=study','root','');
	}catch(Exception $e){
		echo "<h4>Error on db connection : ".$e->getMessage()."</h4>";
	}


	function addUser($email, $password, $full_name){

		global $connection;

		$user_id = 0;
		
		try{

			$query = $connection->prepare("
				INSERT INTO users (id, email, password, full_name) 
				VALUES (NULL, :email, :password, :full_name)
			");

			$query->execute(
				array(
					"email"=>$email,
					"password"=>$password,
					"full_name"=>$full_name
				)
			);

			$user_id = $connection->lastInsertId();

		}catch(Exception $e){
			echo $e->getMessage();
		}

		return $user_id;

	}


	function getUser($email){
		
		global $connection;
		
		try{

			$query = $connection->prepare("
				SELECT * FROM users WHERE email = :email 
			");

			$query->execute(array("email"=>$email));
			$result = $query->fetch();

			return $result;

		}catch(Exception $e){
			echo $e->getMessage();
		}

		return null;

	}

	
?>