<!DOCTYPE html>
<html lang="en">

<head>
    <link href="CSS/Index.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Provided by W3Schools-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Cyber Security Training</title>
    <link rel="icon" type="image/x-icon" href="Assets/Cards/favecon.png">
</head>


<div class="container">
    <div class="header">
        <h1>Cyber Security Training</h1>
    </div>
    <div class="Navbar">
        <div class="topnav" id="topnav">
            <a href="Index.php" class="active">Home</a>
            <div class="dropdown">
                <button class="dropdwn">Content</button>
                <div class="dropdown-content">
                    <a href="Malware.php">Malware</a>
                    <a href="Phishing.php">Phishing</a>
                    <a href="SocialE.php">Social Engineering</a>
                    <a href="Pharming.php">Pharming</a>
                    <a href="Passwords.php">Passwords</a>
                </div>
            </div>
            <a href="About.php" class="active">About</a>
            <div class="topnav-right">
                        <?php
                if (isset($_COOKIE["username"])) {
                    echo '<div class="dropdown">
                            <button class="user">Welcome ' . $_COOKIE["username"] . ' <i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="Logout.php">Logout</a>
                            </div>
                          </div>';
                } else {
                    echo '<div class="login">
                            <a href="login.php">Login</a>
                          </div>
                          <div class="sign_up">
                            <a href="Signup.php">Sign Up</a>
                          </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<body>

    <div class="main">
        <h2>Hello welcome to the cyber security training page</h2>
        <p>This is a place where you will learn about cyber security and how to be safe online!</p>
        <p>Sign up to begin one of our courses!</p>
        <br>

    </div>

    <footer>
        <p>Authors:
        <p>
    </footer>

</body>


</html>