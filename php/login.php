<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["name"];
    $password = $_POST["password"];
    
    $sql = "SELECT username, password FROM user WHERE username = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; 

      
        if (password_verify($password, $hashedPassword)) {
            session_start(); 
        
           // $_SESSION["user_name"] = $row["username"];
           // $_SESSION['role'] = $row['role'];
            
    
                header("Location: ../index.html");
                exit; 
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    header("Location: ../login.html?error=" . urlencode($error));
    exit;
}
?>