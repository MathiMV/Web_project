<?php
	require_once 'dbconf.php';
	function AddData($connect,$username,$name,$firstname,$age,$sex,$phonenumber){
		try {
		
			$sql = "INSERT INTO user VALUES('$username','$name','$firstname',$age,'$sex',$phonenumber)";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$phonenumber = $_POST['phonenumber'];
		AddData($connect,$username,$name,$firstname,$age,$sex,$phonenumber);
	}
	

	?>