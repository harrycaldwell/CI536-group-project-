<!DOCTYPE html>
<html lang="en">
<!--Phishing Course-->

<head>
    <link href="CSS/ModuleStyle.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--**Adds arrow on drop down**-->
    <script src="JavaScript/.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Course</title>
    <link rel="icon" type="image/x-icon" href="Assets/Cards/favecon.png">
</head>


<body>
    <div class="header">
        <h1>Phishing</h1>
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
        <div class="video-wrapper">
            <div class="videoArea">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/o0btqyGWIQw"
                    title="What is Phishing?" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <h2>Introduction To Phishing</h2>
        <p> Phishing is a prevalent form of cyberattack where malicious actors impersonate legitimate entities to trick
            individuals into divulging sensitive information such as usernames, passwords, credit card numbers, or other
            confidential data. These attacks often occur through deceptive emails, messages, or websites, and they can
            have devastating consequences for businesses, including financial loss, data breaches, and damage to
            reputation. </p>
        <h2> Why businesses Are Targeted</h2>
        <p> Businesses are prime targets for phishing attacks due to the valuable information they possess and their
            potential to cause widespread harm. Attackers may impersonate company executives, suppliers, or trusted
            partners to gain access to sensitive data or initiate fraudulent transactions.</p>
        <p> Moreover, with the rise of remote work and digital communications, employees may be more susceptible to
            phishing attempts, making it crucial for businesses to implement robust cyber security measures. </p>

        <h2>Common Phishing Techniques</h2>
        <p>Phishing attacks come in various forms, each designed to deceive recipients and manipulate them into taking a
            specific action.</p>
        <li><b>Email Spoofing -</b> Attackers disguise their email address to mimic that of a legitimate sender, such as
            a colleague, client or reputable organization. </li>
        <li><b>Spear Phishing -</b> A A targeted form of phishing where attacker’s tailer their messages to specific
            individuals or organizations, often using personalized information to increase credibility. </li>
        <li><b>Pharming -</b> Redirecting users from legitimate websites to fraudulent ones without their knowledge,
            typically through manipulation of DNS settings or malware. </li>
        <li><b>Malicous Attachments/Links -</b> Emails contain attachments or links that, when clicked, install malware
            of the recipient’s device or redirect them to a fake website designed to steal credentials. </li>

        <h2>Preventative Measures:</h2>
        <li><b>Implement Security Measures -</b> Deploy robust email filtering and antivirus software to detect and
            block phishing attempts before they reach employees’ inboxes. Utilize firewalls, intrusion detection
            systems, and encryption to secure yours and the company’s network and data. </li>
        <li><b>Use Multi-Factor Authentication (MFA/2FA) -</b> Require employees to use MFA for accessing sensitive
            systems or data. This adds an extra layer of protection by requiring multiple forms of verification, such as
            a password and a one-time code sent to a mobile device.</li>
        <li><b>Regular Updates and Patching -</b> Keep all software, including operating systems, web browsers and
            security tools, up to date with the latest patching and security fixes to address known vulnerabilities
            exploited by attackers.</li>
        <li><b>Monitor For Suspicious Activity -</b> Implement real-time monitoring and logging of network traffic,
            email communications, and user behaviour to detect anomalous or potentially malicious activity. </li>
        <li><b>Establish Clear Policies and Procedures -</b> Develip comprehensive security policies outlining
            acceptable use of company resources, password management guidelines, and procedures for reporting suspected
            phishing attempts. </li>

        <h2>Reporting</h2>
        <p>As an employee, you are encouraged to report any suspected phishing emails or incidents immediately to your
            IT or security team. This is the quickest way to mitigate potential risks and help identify trends or
            patterns in phishing attempts targeting your organisation. </p>

        <h2>Quiz</h2>
        <form id="quizForm">
            <ol>
                <li>
                    <strong>What is phishing?</strong><br>
                    <input type="radio" name="q1" value="A"> A) A fishing technique<br>
                    <input type="radio" name="q1" value="B"> B) A type of cyberattack involving deception<br>
                    <input type="radio" name="q1" value="C"> C) A method of catching phish<br>
                    <input type="radio" name="q1" value="D"> D) A type of computer virus<br>
                </li>
                <li>
                    <strong>What is the purpose of phishing attacks against businesses?</strong><br>
                    <input type="radio" name="q2" value="A"> A) To promote cybersecurity awareness<br>
                    <input type="radio" name="q2" value="B"> B) To steal sensitive information or disrupt operations<br>
                    <input type="radio" name="q2" value="C"> C) To enhance employee productivity<br>
                    <input type="radio" name="q2" value="D"> D) To improve customer service<br>
                </li>
                <li>
                    <strong>Whhat is Spear Phishing?</strong><br>
                    <input type="radio" name="q3" value="A"> A) A fishing technique using a spear<br>
                    <input type="radio" name="q3" value="B"> B) A targeted form of phishing<br>
                    <input type="radio" name="q3" value="C"> C) A method of catching fish in the ocean<br>
                    <input type="radio" name="q3" value="D"> D) A type of encryption algorithm<br>
                </li>
                <li>
                    <strong>How can businesses protect against phishing attacks?</strong><br>
                    <input type="radio" name="q4" value="A"> A) By installing more RAM<br>
                    <input type="radio" name="q4" value="B"> B) By deploying robust security measures such as email
                    filtering and MFA<br>
                    <input type="radio" name="q4" value="C"> C) By increasing social media presence<br>
                    <input type="radio" name="q4" value="D"> D) By reducing employee salaries<br>
                </li>
                <li>
                    <strong>What is MFA/2FA?</strong><br>
                    <input type="radio" name="q5" value="A"> A) A mathematical equation<br>
                    <input type="radio" name="q5" value="B"> B) A type of computer virus<br>
                    <input type="radio" name="q5" value="C"> C) A security mechanism requiring multiple forms of
                    verification<br>
                    <input type="radio" name="q5" value="D"> D) A programming language<br>
                </li>
                <li>
                    <strong>What is Pharming?</strong><br>
                    <input type="radio" name="q6" value="A"> A) A type of agricultural practice<br>
                    <input type="radio" name="q6" value="B"> B) A type of fishing technique<br>
                    <input type="radio" name="q6" value="C"> C) A cyberattack redirecting users to fraudulent
                    websites<br>
                    <input type="radio" name="q6" value="D"> D) A method of harvesting crops<br>
                </li>
                <li>
                    <strong>How can employees identify phishing emails?</strong><br>
                    <input type="radio" name="q7" value="A"> A) By hoping for the best<br>
                    <input type="radio" name="q7" value="B"> B) By checking for unusual language and verifying links<br>
                    <input type="radio" name="q7" value="C"> C) By reporting every email, you get to IT/Security
                    team<br>
                    <input type="radio" name="q7" value="D"> D) By asking a colleague for reassurance<br>
                </li>
                <li>
                    <strong>What should you do if you recieve a suspected phishing email?</strong><br>
                    <input type="radio" name="q8" value="A"> A) Delete it immediately <br>
                    <input type="radio" name="q8" value="B"> B) Forward it to a colleague<br>
                    <input type="radio" name="q8" value="C"> C) Report it to their IT or security team<br>
                    <input type="radio" name="q8" value="D"> D) Respond with personal information<br>
                </li>
                <li>
                    <strong>What role does employee education play in preventing phishing attacks?</strong><br>
                    <input type="radio" name="q9" value="A"> A) No role at all<br>
                    <input type="radio" name="q9" value="B"> B) Teaches employees to not trust any emails<br>
                    <input type="radio" name="q9" value="C"> C) A crucial role in raising awareness and teaching
                    recognition<br>
                    <input type="radio" name="q9" value="D"> D) A secondary role to advanced security software<br>
                </li>
                <li>
                    <strong>How does phishing differ from other types of cyberattacks targeting businesses?</strong><br>
                    <input type="radio" name="q10" value="A"> A) It doesn't differ<br>
                    <input type="radio" name="q10" value="B"> B) It relies deception and social engineering tactics<br>
                    <input type="radio" name="q10" value="C"> C) It involved physical break-ins<br>
                    <input type="radio" name="q10" value="D"> D) It only targets individual <br>
                </li>
            </ol>
            <input type="submit" value="Submit">

        </form>
        <div id="result"></div>

    </div>
</body>

</html>