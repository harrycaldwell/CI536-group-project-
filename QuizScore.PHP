<?php
    session_start();

    //Connect to the server
    $conn = new mysqli("localhost","hc899_GpDBadmin","GpDBadmin","hc899_GpDB");
    if ($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    //Score on the quiz
    $score = $_POST['score'];
    //The name of the Javascript file
    $scriptName = $_POST['scriptName'];
    
    //Checks to see if the user is logged in with the cookie and allows the user to submit score to the database
    if(isset($_COOKIE["username"])){
        //Switch statement that goes through each case based on scriptName
        switch($scriptName){
            case Pharming:
                mysqli_query($conn, "INSERT INTO modulePharming (userName, Score") VALUES ("userName, score");
                break;
            case password:
                mysqli_query($conn, "INSERT INTO modulePassword (userName, Score") VALUES ("userName, score");
                break;
            case Malware:
                mysqli_query($conn, "INSERT INTO moduleMalware (userName, Score") VALUES ("userName, score");
                break;
            case Social:
                mysqli_query($conn, "INSERT INTO moduleSocial (userName, Score") VALUES ("userName, score");
                break;
            case Phishing:
                mysqli_query($conn, "INSERT INTO modulePhishing (userName, Score") VALUES ("userName, score");
                break;
        }
        else{
            echo 'The scriptName is invalid';
        }
    };
