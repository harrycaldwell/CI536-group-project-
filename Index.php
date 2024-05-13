<?php
  // Check if the username cookie is set
  $isLoggedIn = isset($_COOKIE["username"]);
?>

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

<body>
  <div class="header">
    <h1>Cyber Security Training</h1>
  </div>
  <div class="Navbar">
    <div class="topnav" id="topnav">
      <a href="Index.php" class="active">Home</a>
      <div class="dropdown">
        <button class="dropdwn">Content <i class="fa fa-caret-down"></i></button>
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
                    echo '<div class="logout">
                            <button class="user">Welcome ' . $_COOKIE["username"] . ' <i class="fa fa-caret-down"></i></button>
                            <div class="logout-content">
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
  <div class="main">

    <div class="card-container">
     <a href="Passwords.html">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Assets/Cards/passwords.png" id="pword1" alt="Passwords" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Passwords</h1>
              <p>Subtitle</p>
              <p>Description</p>
            </div>
          </div>
        </div>
      </a>

      <a href="Pharming.html">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Assets/Cards/pharming.png" id="pharm" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Pharming</h1>
              <p>Subtitle</p>
              <p>Description</p>
            </div>
          </div>
        </div>
      </a>

      <a href="Phishing.html">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Assets/Cards/phishing.png" id="phish" alt="phishing" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Phishing</h1>
              <p>Subtitle</p>
              <p>Description</p>
            </div>
          </div>
        </div>
      </a>


      <a href="SocialE.html">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Assets/Cards/social.png" id="social" alt="social" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Social</h1>
              <p>Subtitle</p>
              <p>Description</p>
            </div>
          </div>
        </div>
      </a>

      <a href="Malware.html">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="Assets/Cards/virus.png" id="virus" alt="virus" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <h1>Malware</h1>
              <p>Malware - Information and Prevention</p>
              <p>This course will inform you on what malware is
                and the different forms they come in. You will also learn
                how it spreads and what you can do to fight it; protecting yourself and your machine.</p>
            </div>
          </div>
        </div>
      </a>

    </div>
  </div>
</body>
<footer>
  hello
</footer>
</html>
