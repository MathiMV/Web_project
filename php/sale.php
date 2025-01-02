
<?php
	//session_start();
	require_once 'dbconf.php';
	function AddData($connect,$username,$type,$Company,$Condition,$location,$Year,$Price,$Gear,$Fule,$image){
		try {
			$imgData = addslashes(file_get_contents($image));
			$sql = "INSERT INTO sale (username, type, company, `condition`, location, year, price, gear, fuel, image)
			VALUES('$username','$type','$Company','$Condition','$location',$Year,$Price,'$Gear','$Fule','$imgData')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: menu.php');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		//$username = $_SESSION['username'];
		$username = $_POST['username'];
		$type = $_POST['type'];
		$Company = $_POST['Company'];
		$Condition = $_POST['Condition'];
		$location = $_POST['location'];
		$Year=$_POST['Year'];
		$Price=$_POST['Price'];
		$Gear=$_POST['Gear'];
		$Fule=$_POST['Fule'];
		$image = $_FILES['image']['tmp_name'];
	
		AddData($connect,$username,$type,$Company,$Condition,$location,$Year,$Price,$Gear,$Fule,$image);
	}

	?>
