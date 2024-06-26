<!DOCTYPE html>
<html lang="en">
<!--Pharming course-->

<head>
    <link href="CSS/ModuleStyle.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--**Adds arrow on drop down**-->
    <script src="JavaScript/Pharming.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Pharming</title>
    <link rel="icon" type="image/x-icon" href="Assets/Cards/favecon.png">
</head>


<body>
    <div class="header">
        <h1>Pharming</h1>
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
            </div>
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

    <div class="Course">
        <!--**Course content here**-->
        <h1>Introduction</h1>
        <h3>Course Content</h3>
        <p>In this course you will learn about pharming and how to protect against it.</p>
        <ul>
            <li>What is Pharming</li>
            <li>How does Pharming work.</li>
            <li>Protecting against Pharming.</li>
        </ul>
        <div class="video-wrapper">
            <div class="videoArea">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/20FAWUVo3as?si=eRPm7HjRVwCdjXxH"
                    title="Pharming Video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>


        <h2>What is Pharming.</h2>
        <p>Pharming is similar to phishing but lacks the lure or baiting aspect. It operates in two main steps:
            First, cybercriminals implant harmful software on your computer or server. Second, this software
            redirects you to a counterfeit website, potentially tricking you into divulging personal details.
        </p>
        <p>Computer pharming doesn’t require that initial click to take you to a fraudulent website. Instead,
            you are redirected there automatically – where the pharmers then have access to any personal information you
            divulge.
        </p>
        <h2>How does Pharming work?</h2>
        <p>Pharming is like a sneaky trick where scammers mess with the internet's address book, called the domain name
            system (DNS).
            Imagine you want to visit a popular website you trust, but instead, you're taken to a fake, look-alike site
            set up by these
            scammers. They do this by hacking into the DNS system or finding its weak spots</p>
        <p>Here's a simple analogy: think of the DNS server as the internet's GPS. It translates easy-to-remember
            website names, like amazon.com,
            into specific digital addresses, like 198.137.20.19. If a scammer changes this address in the background,
            it's like giving you the wrong
            GPS directions on purpose. So, instead of ending up at your favorite website, you might unknowingly land on
            a fake one that the scammer
            created for some shady reasons.</p>
        <h2>Protecting against Pharming</h2>
        <ul>
            <li>Use HTTPS instead of HTTP - Use HTTPS instead of HTTP. HTTPS is the internet's safeguarded communication
                method. It scrambles data, making it readable only to the designated recipients. In contrast, HTTP, the
                predecessor to HTTPS, is less secure and was developed prior to the rise in internet security threats.
            </li>
            <li>Keep computers updated - it's really important to regularly update your computer's operating system (OS)
                and software to help guard against pharming. By installing the latest updates, you're getting fixes for
                the sneaky tricks hackers use to try and break into computers.</li>
            <li>Use a virtual private network (VPN) - Using a VPN is like wearing an invisibility cloak online. It masks
                your IP address from websites and helps keep hackers from snatching your personal info. VPNs set up
                secure, encrypted tunnels between your device and a company's network. So, even if someone tries to mess
                with the DNS, your private details stay protected. Just make sure to choose a VPN service with
                trustworthy DNS Servers.</li>
        </ul>

        <h2>Quiz</h2>

        <form id="quizForm">


            <div id="question-1" class="question" data-correct-answer="C">
                <span>What is pharming?</span>
                <div>
                    <input type="radio" name="q1" value="A"> A) A fishing technique<br>
                    <input type="radio" name="q1" value="B"> B) A type of malware<br>
                    <input type="radio" name="q1" value="C"> C) A fraudulent website redirecting method<br>
                    <input type="radio" name="q1" value="D"> D) A type of computer virus<br>
                </div>
            </div>
            <div id="question-2" class="question" data-correct-answer="B">
                <span>How does pharming differ from phishing?</span>
                <div>
                    <input type="radio" name="q2" value="A"> A) Pharming requires an initial click<br>
                    <input type="radio" name="q2" value="B"> B) Pharming lacks the lure or baiting aspect<br>
                    <input type="radio" name="q2" value="C"> C) Pharming operates only through email<br>
                    <input type="radio" name="q2" value="D"> D) Pharming is less harmful than phishing<br>
                </div>
            </div>
            <div id="question-3" class="question" data-correct-answer="B">
                <span>What are the two main steps of pharming?</span>
                <div>
                    <input type="radio" name="q3" value="A"> A) Sending emails and clicking links<br>
                    <input type="radio" name="q3" value="B"> B) Installing harmful software and redirecting to a
                    counterfeit website<br>
                    <input type="radio" name="q3" value="C"> C) Stealing passwords and bank details<br>
                    <input type="radio" name="q3" value="D"> D) Hacking into social media accounts<br>
                </div>
            </div>
            <div id="question-4" class="question" data-correct-answer="A">
                <span>What does pharming involve implanting on a computer or server?</span>
                <div>
                    <input type="radio" name="q4" value="A"> A) Harmful software<br>
                    <input type="radio" name="q4" value="B"> B) Hardware devices<br>
                    <input type="radio" name="q4" value="C"> C) Pop-up ads<br>
                    <input type="radio" name="q4" value="D"> D) Anti-virus software<br>
                </div>
            </div>
            <div id="question-5" class="question" data-correct-answer="B">
                <span>How does pharming manipulate the internet's address book?</span>
                <div>
                    <input type="radio" name="q5" value="A"> A) By hacking into social media accounts<br>
                    <input type="radio" name="q5" value="B"> B) By altering the domain name system (DNS)<br>
                    <input type="radio" name="q5" value="C"> C) By changing website passwords<br>
                    <input type="radio" name="q5" value="D"> D) By creating fake emails<br>
                </div>
            </div>
            <div id="question-6" class="question" data-correct-answer="A">
                <span>What analogy is used to explain the DNS server's role?</span>
                <div>
                    <input type="radio" name="q6" value="A"> A) Internet's GPS<br>
                    <input type="radio" name="q6" value="B"> B) Internet's encyclopedia<br>
                    <input type="radio" name="q6" value="C"> C) Internet's traffic signal<br>
                    <input type="radio" name="q6" value="D"> D) Internet's mailbox<br>
                </div>
            </div>
            <div id="question-7" class="question" data-correct-answer="B">
                <span>What is the purpose of using HTTPS instead of HTTP?</span>
                <div>
                    <input type="radio" name="q7" value="A"> A) To make websites load faster<br>
                    <input type="radio" name="q7" value="B"> B) To secure communication by encrypting data<br>
                    <input type="radio" name="q7" value="C"> C) To display more advertisements<br>
                    <input type="radio" name="q7" value="D"> D) To track user behavior<br>
                </div>
            </div>
            <div id="question-8" class="question" data-correct-answer="C">
                <span>Why is it important to keep computers updated to protect against pharming?</span>
                <div>
                    <input type="radio" name="q8" value="A"> A) To make them look new<br>
                    <input type="radio" name="q8" value="B"> B) To prevent system crashes<br>
                    <input type="radio" name="q8" value="C"> C) To get fixes for security vulnerabilities<br>
                    <input type="radio" name="q8" value="D"> D) To increase internet speed<br>
                </div>
            </div>
            <div id="question-9" class="question" data-correct-answer="B">
                <span>How does using a VPN help protect against pharming?</span>
                <div>
                    <input type="radio" name="q9" value="A"> A) By making websites load faster<br>
                    <input type="radio" name="q9" value="B"> B) By encrypting internet traffic<br>
                    <input type="radio" name="q9" value="C"> C) By displaying more advertisements<br>
                    <input type="radio" name="q9" value="D"> D) By tracking user behavior<br>
                </div>
            </div>
            <div id="question-10" class="question" data-correct-answer="C">
                <span>What precaution is recommended to protect against pharming when using a VPN?</span>
                <div>
                    <input type="radio" name="q10" value="A"> A) Using public Wi-Fi networks<br>
                    <input type="radio" name="q10" value="B"> B) Avoiding software updates<br>
                    <input type="radio" name="q10" value="C"> C) Choosing a VPN service with trustworthy DNS servers<br>
                    <input type="radio" name="q10" value="D"> D) Sharing passwords with friends<br>
                </div>
            </div>
            <button class="btn" type="button" id="submit-btn">Submit Answer</button>
        </form>
        <div id="result"></div>
    </div>
</body>

</html>