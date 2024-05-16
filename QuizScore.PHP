<?php
    session_start();

    //Connect to the server
    $conn = new mysqli("localhost", "hc899_GpDBadmin", "GpDBadmin", "hc899_GpDB");

    if ($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    // Check if 'score' and 'scriptName' are set in the GET data
    if (!isset($_GET['score']) || !isset($_GET['scriptName'])) {
        die("Score or script name not set in GET data");
    }

    // Score on the quiz
    $score = $_GET['score'];
    // The name of the Javascript file
    $scriptName = $_GET['scriptName'];
    // Username
    $userName = $_COOKIE['username'];

    // Checks to see if the user is logged in with the cookie and allows the user to submit score to the database
    if(isset($_COOKIE["username"])){
        // Switch statement that goes through each case based on scriptName
        switch($scriptName){
            case "Pharming.js":
                $result = mysqli_query($conn, "INSERT INTO modulePharming (userName, score) VALUES ('$userName', $score)");
                if (!$result) {
                    die('Error executing query: ' . mysqli_error($conn));
                }
                break;
            case "password.js":
                $result = mysqli_query($conn, "INSERT INTO modulePasswords (userName, score) VALUES ('$userName', $score)");
                if (!$result) {
                    die('Error executing query: ' . mysqli_error($conn));
                }
                echo "suck my cock i got it to work";
                break;
            case "Malware.js":
                $result = mysqli_query($conn, "INSERT INTO moduleMalware (userName, score) VALUES ('$userName', $score)");
                if (!$result) {
                    die('Error executing query: ' . mysqli_error($conn));
                }
                break;
            case "SocialE.js":
                $result = mysqli_query($conn, "INSERT INTO moduleSocial (userName, score) VALUES ('$userName', $score)");
                if (!$result) {
                    die('Error executing query: ' . mysqli_error($conn));
                }
                break;
            case "Phishing.js":
                $result = mysqli_query($conn, "INSERT INTO modulePhising (userName, score) VALUES ('$userName', $score)");
                if (!$result) {
                    die('Error executing query: ' . mysqli_error($conn));
                }
                break;
            default:
                echo 'The scriptName is invalid';
        }
    }
?>