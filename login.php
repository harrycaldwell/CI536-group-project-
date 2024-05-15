<?php
    session_start();

    if (!empty($_POST)){
        $conn = new mysqli("localhost","hc899_GpDBadmin","GpDBadmin","hc899_GpDB");
        if ($conn->connect_error){
            die("connection failed: " . $conn->connect_error);
        }
        $sql="SELECT userEmail,userPassword, userName FROM tAccounts";
        $result = mysqli_query($conn, $sql);
        while($record = mysqli_fetch_assoc($result)){
            if($record["userEmail"] == $_POST['email'] && $record["userPassword"]== $_POST['password'] ){
                $_SESSION["status"]= "loggedin";
                setcookie("username", $record['userName'], time() + (86400 * 30), "/"); // Takes the username as the username recorded from $reord
                header("Location: https://hc899.brighton.domains/Groupproject/Index.php");
                exit; // Add exit to stop further execution
            } 
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <link href ="CSS/LoginSignup.css" rel="stylesheet">
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial scale=1">
       <title>Login</title>
       <link rel="icon" type="image/x-icon" href="Assets/Cards/favecon.png">
   </head>

   <body class="LogInSignUp">
    <!--Form for the login box-->
    <div class="loginbox">
        <h2>Please login below to continue</h2>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="Index.html" id="forgotPasswordLink">Forgot Password?</a><br>
            <input type="submit" value="Login">
            <div><a href="Index.php" id="HomeButton">Back to Home</a></div>
        </form>
    </div>

    


   
   </body>
</html>