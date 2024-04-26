<?php
    session_start()

    $username = $_POST["username"];
    $email =$_POST["email"];
    $password =$_POST["password"];


    if(!empty($_POST)){
        $conn = new mysqli("localhost","dbusername","pword","databasename");
        if($conn->connect_error){
            die("connection failed: " . $conn->connect_error);
        }
    

        $sql ="INSERT INTO tAccounts (username,email,password) VALUES('$username','$email','$password')";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        echo "Account Created";
    }

?>