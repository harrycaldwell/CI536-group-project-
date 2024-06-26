<!DOCTYPE html>
<html lang="en">

<head>
    <link href="CSS/ModuleStyle.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--**Adds arrow on drop down**-->
    <!--Provided by W3Schools-->
    <script src="JavaScript/password.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Cyber Security Training</title>
    <link rel="icon" type="image/x-icon" href="Assets/Cards/favecon.png">
</head>

<body>
    <div class="header">
        <h1>Passwords</h1>
    </div>
    <div class="Navbar">
        <div class="topnav" id="topnav">
            <div class="topnav-left">
                <a href="Index.php" id="IndexBtn" class="active">Home</a>
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
                <a href="About.php" id="AboutBtn">About</a>
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
    <div class="Course">
        <div class="video-wrapper">
            <div class="videoArea">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/nARrIdmE8BY?si=H19EtjoD2wH41iUj"
                    title="Passwords Video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>



        <section>
            <h2>Password Security Guide</h2>
            <p> Passwords are a crucial aspect of our daily lives, whether it's for social media, emails, or
                sensitive
                tasks like banking. Keeping them safe and secure is paramount. In this section, we'll discuss the
                risks
                associated with compromised passwords, how to keep passwords secure, and what to do if they are
                compromised. </p>
            <h3>Risks</h3>
            <p> When usernames and passwords are compromised, it poses significant risks to individuals and
                organizations. For instance, in 2017, Equifax suffered a massive data breach, exposing approximately
                147
                million people’s personal data, including phone numbers, addresses, dates of birth, and social
                security
                numbers. Compromised usernames and passwords of the company's employees were one of the key factors
                contributing to this breach. <a href="https://archive.epic.org/privacy/data-breach/equifax/">Epic.org
                    Halifax Incident</a>
            </p>
            <h3>Secure Passwords</h3>
            <ol>
                <li>Have a minimum of 12 characters.</li>
                <li>Use a combination of numbers, letters (including capital letters), and special characters (e.g.,
                    !,
                    @, #, $, %).</li>
                <li>Avoid predictable patterns such as "1234" and "abc".</li>
                <li>Don’t reuse the same passwords.</li>
                <li>Regularly update your passwords.</li>
                <li>Do not share your passwords with anyone.</li>
            </ol>

            <div>
                <h3>Password Generator</h3>
                <input type="text" id="password" readonly>
                <button class="btn" onclick="generatePassword()">Generate Password</button>
            </div>

            <h3>2FA (Two-Factor Authentication)</h3>
            <p> If available, use 2FA as an added layer of security. Even if your password is compromised, access
                will
                be futile without the 2FA code generated by an app or text. </p>
            <h3>In the Event of Compromise</h3>
            <p> If your password is compromised, change it immediately to prevent further malicious activity. Log
                out of
                all devices and report the incident to your company's IT department for further assessment and
                containment. </p>
            <h3>Password Manager</h3>
            <p> Using a password manager is a secure way to store and autofill your passwords. Access to the manager
                can
                be protected by biometrics or a master passkey. Some recommended password managers include: <a
                    href="https://www.lastpass.com">LastPass</a>, <a href="https://nordpass.com">NordPass</a> and <a
                    href="https://www.dashlane.com">Dashlane</a></p>








        </section>
        <div id="quiz-container">
            <h3>passwords Quiz</h3>
            <form id="quiz-form">
                <div id="question-1" class="question" data-correct-answer="d">
                    <span>What is the recommended minimum number of characters for a strong password?</span>
                    <div>
                        <input type="radio" name="q1" value="a"> a) 6 <br>
                        <input type="radio" name="q1" value="b"> b) 40 <br>
                        <input type="radio" name="q1" value="c"> c) 10 <br>
                        <input type="radio" name="q1" value="d"> d) 12 <br>
                    </div>
                </div>
                <div id="question-2" class="question" data-correct-answer="c">
                    <span>Which of the following is NOT recommended when creating a strong password?</span>
                    <div>
                        <input type="radio" name="q2" value="a"> a) Using a combination of numbers and letters <br>
                        <input type="radio" name="q2" value="b"> b) Avoiding predictable patterns <br>
                        <input type="radio" name="q2" value="c"> c) Reusing the same password for multiple accounts
                        <br>
                        <input type="radio" name="q2" value="d"> d) Including special characters such as !, @, #, $,
                        %
                        <br>
                    </div>
                </div>
                <div id="question-3" class="question" data-correct-answer="c">
                    <span>What additional security measure does 2FA provide?</span>
                    <div>
                        <input type="radio" name="q3" value="a"> a) Password encryption <br>
                        <input type="radio" name="q3" value="b"> b) Automatic password updates <br>
                        <input type="radio" name="q3" value="c"> c) A second form of verification <br>
                        <input type="radio" name="q3" value="d"> d) Password strength analysis <br>
                    </div>
                </div>
                <div id="question-4" class="question" data-correct-answer="c">
                    <span>What should you do first if you suspect your password has been compromised?</span>
                    <div>
                        <input type="radio" name="q4" value="a"> a) Ignore it and continue using the same password
                        <br>
                        <input type="radio" name="q4" value="b"> b) Report it to your company's IT department <br>
                        <input type="radio" name="q4" value="c"> c) Change your password immediately <br>
                        <input type="radio" name="q4" value="d"> d) Log out of all devices <br>
                    </div>
                </div>
                <div id="question-5" class="question" data-correct-answer="c">
                    <span>What is a recommended method for securely storing and managing passwords?</span>
                    <div>
                        <input type="radio" name="q5" value="a"> a) Writing them down on a piece of paper <br>
                        <input type="radio" name="q5" value="b"> b) Memorizing all passwords <br>
                        <input type="radio" name="q5" value="c"> c) Using a password manager <br>
                        <input type="radio" name="q5" value="d"> d) Sharing them with trusted individuals <br>
                    </div>
                </div>
                <div id="question-6" class="question" data-correct-answer="b">
                    <span>Which of the following is NOT a characteristic of a strong password?</span>
                    <div>
                        <input type="radio" name="q6" value="a"> a) Length of at least 8 characters <br>
                        <input type="radio" name="q6" value="b"> b) Including only lowercase letters <br>
                        <input type="radio" name="q6" value="c"> c) Including special characters <br>
                        <input type="radio" name="q6" value="d"> d) Avoiding predictable patterns <br>
                    </div>
                </div>
                <div id="question-7" class="question" data-correct-answer="d">
                    <span>Why is it important to avoid password reuse?</span>
                    <div>
                        <input type="radio" name="q7" value="a"> a) It saves time <br>
                        <input type="radio" name="q7" value="b"> b) It increases security <br>
                        <input type="radio" name="q7" value="c"> c) It's easier to remember <br>
                        <input type="radio" name="q7" value="d"> d) It prevents access to all accounts if one is
                        compromised <br>
                    </div>
                </div>
                <div id="question-8" class="question" data-correct-answer="a">
                    <span>What should you do after changing a compromised password?</span>
                    <div>
                        <input type="radio" name="q8" value="a"> a) Log out of all devices <br>
                        <input type="radio" name="q8" value="b"> b) Share the new password with trusted individuals
                        <br>
                        <input type="radio" name="q8" value="c"> c) Continue using the compromised password <br>
                        <input type="radio" name="q8" value="d"> d) Update the password on only one account <br>
                    </div>
                </div>
                <div id="question-9" class="question" data-correct-answer="a">
                    <span>What is the purpose of regularly updating passwords?</span>
                    <div>
                        <input type="radio" name="q9" value="a"> a) To increase security <br>
                        <input type="radio" name="q9" value="b"> b) To decrease security <br>
                        <input type="radio" name="q9" value="c"> c) To confuse hackers <br>
                        <input type="radio" name="q9" value="d"> d) To simplify account access <br>
                    </div>
                </div>
                <div id="question-10" class="question" data-correct-answer="b">
                    <span>Which of the following is an example of a strong password?</span>
                    <div>
                        <input type="radio" name="q10" value="a"> a) password123 <br>
                        <input type="radio" name="q10" value="b"> b) Abcdefg123! <br>
                        <input type="radio" name="q10" value="c"> c) 123456 <br>
                        <input type="radio" name="q10" value="d"> d) qwerty <br>
                    </div>
                </div>

                <button button class="btn" type="button" id="submit-btn">Submit Answer</button>
            </form>
            <div id="result"></div>
        </div>


    </div>
    </div>
</body>

</html>