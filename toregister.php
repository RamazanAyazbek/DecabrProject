<?php

	if($_SERVER['REQUEST_METHOD']==='POST'){

		if(isset($_POST['email'])&&isset($_POST['full_name'])&&isset($_POST['pass1'])&&isset($_POST['pass2'])){

			require_once 'db.php';

			if($_POST['pass1']===$_POST['pass2']){

				$checkUser = getUser($_POST['email']);

				if($checkUser==null){

					$new_user_id = addUser($_POST['email'], $_POST['pass1'], $_POST['full_name']);
					

					header("Location:signIn.php?success");

				}else{

					header("Location:signUp.php?usererror");

				}

			}else{

				header("Location:signUp.php?passerror");

			}
		
		}else{

			header("Location:signUp.php?error");

		}

	}else{

		header("Location:index.php");

	}
	

?>