<?php
session_start();

if(!empty($_POST)){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost","hc899_GpDBadmin","GpDBadmin","hc899_GpDB");
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    $sql ="INSERT INTO tAccounts (userName,userEmail,UserPassword) VALUES('$username','$email','$password')";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    echo "Account Created";
    header("Location: https://hc899.brighton.domains/Groupproject/Login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="CSS/LoginSignup.css">
    <title>Sign up</title>
    <link rel="icon" type="image/x-icon" href="Assets/Cards/favecon.png">
</head>
<body class="LogInSignUp">

    

        <header class="banner">
            <nav class="menu"><!--The primary navigation for the page -->
                <ul>          
                </ul>
                </nav>
        </header>

        <div class="Signup-wrapper">
            <div class="Signup-box">
                <h2>Sign Up</h2>
                <form action="" method="post">
                    <div>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <div>
                        <input type="submit" value="Sign Up">
                    </div> 
                    <div><a href="Index.html" id="HomeButton">Back to Home</a></div>
                    
                </form>
               
            </div> <!--End of box-->
        </div><!--end of box wrapper-->
    
</body>

</html>
