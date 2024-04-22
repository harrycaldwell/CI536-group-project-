<?php
    session_start();

    if (!empty($post)){
        $conn = new sqli("localhost",dbusername,dirname,databasename);
            if ($conn->connection_error);{
                die("connection failed: " . $conn->connect_error);
            }
        $sql="SELECT password FROM users";
        $result = mysqli_query($conn, $sql);
        while($record = mysqli_fetch_assoc($result)){
            if($record ["password"]== $_POST['password']){
                $_SESSION["status"]= "loggedin";
                $_SESSION["username"] = $_POST['username'];
                header("Location:url");
                exit();
            } 
        }    
    }
?>