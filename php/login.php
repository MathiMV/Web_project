<?php
    session_start();
    require_once 'dbconf.php';

        if (isset($_POST['login'])) {
            
            $name = $_POST["name"];
            $upassword = $_POST["password"];
            $hashed_password = password_hash($upassword,PASSWORD_DEFAULT);

            $sql = "SELECT username FROM user WHERE username = '$name' AND password = '$hashed_password'";
            
            $result = $connect->query($sql);

            if ($result ->num_rows > 0) {
               // session_start(); // you can add this at the start line of the document
                
                $row = $result -> fetch_assoc();
                $_SESSION["user_name"] = $row["username"];
                header('Location: ../index.html');
            } 
            else {
                echo '<p class="error-message">Invalid username or password.</p>';
            }
            $connect->close();
        }
    ?>

