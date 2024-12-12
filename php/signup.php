<?php
	require_once 'dbconf.php';
	function AddData($connect,$username,$password){
		try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
		
			$sql = "INSERT INTO user VALUES('$username','$hashed_password')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../form.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$password = $_POST['password_has'];
		AddData($connect,$username,$password);
	}
	

	?>