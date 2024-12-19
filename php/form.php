<?php
	require_once 'dbconf.php';
	function AddData($connect,$username,$name,$firstname,$age,$sex,$phonenumber,$address){
		try {
		
			$sql = "INSERT INTO userinfo VALUES('$username','$name','$firstname',$age,'$sex',$phonenumber,'$address')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
			header('Location: ../index.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		$name = $_POST['name'];
		$firstname = $_POST['Fname'];
		$age = $_POST['Age'];
		$sex = $_POST['Sex'];
		$address = $_POST['address'];
		$phonenumber = $_POST['Telephone_No'];
		
		AddData($connect,$username,$name,$firstname,$age,$sex,$phonenumber,$address);
	}
	

	?>