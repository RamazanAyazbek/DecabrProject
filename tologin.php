<?php

	if($_SERVER['REQUEST_METHOD']==='POST'){

		if(isset($_POST['email'])&&isset($_POST['password'])){

			require_once 'db.php';

			$user = getUser($_POST['email']);
			
			if($user!=null){

				if($user['password']===$_POST['password']){

					session_start();

					$_SESSION['CURRENT_USER'] = $user;

					header("Location:index.php");


				}else{

					header("Location:signIn.php?passerror");

				}

			}else{

				header("Location:signIn.php?usererror");

			}
		
		}else{

			header("Location:signIn.php?error");

		}

	}else{

		header("Location:index.php");

	}
	

?>