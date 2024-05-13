<!DOCTYPE html>
<html lang="en">
    <!--Social Engineering Course-->
    <head>
        <link href="CSS/ModuleStyle.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> <!--**Adds arrow on drop down**-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>Social Engineering</title>
    </head>
    <body>
        <div class="header">
            <h1>Social Engineering</h1>
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
        </div>

        <div class="Course">
            <h2>Introduction</h2>
            <p>In this course you will learn what Social Engineering is;
                 how to spot it and how to prevent it. To start, Social engineering 
                 is a strategy employed by individuals or groups to manipulate others 
                 into giving out confidential information, performing actions, or making 
                 decisions that are beneficial to the attacker. It typically involves exploiting
                 psychological traits, such as trust, authority, or fear, rather than relying on technical vulnerabilities.
                 Social engineers may use various tactics, including deception, impersonation, and manipulation,
                 to achieve their objectives, which can range from gaining access to sensitive data or systems to influencing behavior or outcomes in their favor.





                </p>
            <h3>Course Content</h3>
            <ul>
                <li>Social Media Safety</li>
                <li>Real Life Danger</li>
                <li>Scam Recognition and Reporting</li>
            </ul>
            <div class ="video-wrapper">
                <div class="videoArea"><iframe width="420" height="315"
                    src="https://youtube.com/embed/uvKTMgWRPw4" title ="Social Engineering Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                    </iframe></div>
            </div>
            
            <h2>Social Media Safety</h2>
            <p>One of the most common ways hackers utilise socal engineering is through
                social media. Social media is targeted as a large percentage of people will have a social
                media account of some regard and this profile may have many personal details on
                it which they can use to aid them in their attack.</p>
            <p>For example an attacker may create a fake page impersonating someone you know/ are friends with and
              then message you on that account. If this technique is believed by the victim then the attacker
              will now be in a position where they can start asking for things a regular friend would, maybe that's money
              or more personal details. Attackers may take this even further and if by using this fake account they gain
              access to a real one through manipulation, then they have an even more believable front to continue the attack,
              gain personal details and then rinse and repeat.
      
            </p>
            <p>Preventing social engineering on social media requires a blend of caution, privacy management, and 
              awareness. Firstly, limit the amount of personal information shared on social media platforms. Be cautious 
              about what you post, including details about your location, daily routines, or sensitive personal information.
              Secondly, regularly review and adjust privacy settings to control who can see your posts and personal information.
              It's also essential to be selective about accepting friend requests or connections, ensuring you only connect with
              people you know and trust. Be wary of unsolicited messages or requests, especially if they seem too good to be true
              or create a sense of urgency. </p>
            <h2>Real Life Danger</h2>
            <p>Social engineering is not just limited to the digital world. Some attackers may go as far as to employ
              their schemes in real life and in doing so, come across far less conspicous or even the opposite and be
              and blackmail you with information you may have spilled. For instance, an attacker might covertly watch someone
              entering a PIN at an ATM or overhear a confidential conversation in a public place. By leveraging information obtained
              through observation, they can then impersonate the victim or use the gleaned insights to craft convincing social engineering
              schemes. Over-the-shoulder attacks also occur in office settings, where an unauthorized person might gain access to sensitive
              documents or login credentials by covertly observing employees' computer screens or conversations. Mitigating such 
              real-world social engineering attacks requires fostering a culture of security awareness, maintaining physical security measures,
              and implementing policies that restrict access to sensitive information or areas. Of course it is impossible
              to fully prevent these things from happening, however a quick word to staff about not disclosing any sort of 
              sensitive information in public could go a long way.
            </p>
            <h2>Scam Recognition and Reporting</h2>
            <p>Scams are at the heart of social engineering and are one of the most commons methods of attack as Scams
              may be carried out autonomously and very quickly. Scams can be combined with other attack mediums such as Phishing
              or Pharming to maximise their effectiveness. In basic terms a 
            </p>
            <h2>Quiz</h2>
            <form id="quizForm">
                <ol>
                  <li>
                    <h3>What is social engineering?</h3>
                    <input type="radio" name="q1" value="a">Manipulating social media algorithms<br>
                    <input type="radio" name="q1" value="b">Hacking into computer networks<br>
                    <input type="radio" name="q1" value="c">Manipulating people to gain confidential information<br>
                    <input type="radio" name="q1" value="d">Creating new social networks<br>
                  </li>
                  <li>
                    <h3>Which of the following is NOT a common technique used in social engineering?</h3>
                    <input type="radio" name="q2" value="a">Phishing<br>
                    <input type="radio" name="q2" value="b">Shoulder surfing<br>
                    <input type="radio" name="q2" value="c">Encryption<br>
                    <input type="radio" name="q2" value="d">Pretexting<br>
                  </li>
                  <li>
                    <h3>What is phishing?</h3>
                    <input type="radio" name="q3" value="a">Fishing for compliments on social media<br>
                    <input type="radio" name="q3" value="b">Fishing as a recreational activity<br>
                    <input type="radio" name="q3" value="c">Sending deceptive emails to trick people into revealing personal information<br>
                    <input type="radio" name="q3" value="d">A type of social gathering<br>
                  </li>
                  <li>
                    <h3>Which of the following is an example of pretexting?</h3>
                    <input type="radio" name="q4" value="a">Pretending to be a bank employee to obtain someone's account details<br>
                    <input type="radio" name="q4" value="b">Installing antivirus software on a computer<br>
                    <input type="radio" name="q4" value="c">Creating a strong password for online accounts<br>
                    <input type="radio" name="q4" value="d">Asking someone directly for their password<br>
                  </li>
                  <li>
                    <h3>What is the main goal of a social engineer?</h3>
                    <input type="radio" name="q5" value="a">To fix social problems<br>
                    <input type="radio" name="q5" value="b">To gain unauthorized access to information or systems<br>
                    <input type="radio" name="q5" value="c">To become popular on social media<br>
                    <input type="radio" name="q5" value="d">To organize social events<br>
                  </li>
                  <li>
                    <h3>What is tailgating in the context of social engineering?</h3>
                    <input type="radio" name="q6" value="a">Following someone too closely while driving<br>
                    <input type="radio" name="q6" value="b">Gaining unauthorized access to a restricted area by following someone who has legitimate access<br>
                    <input type="radio" name="q6" value="c">A type of online game<br>
                    <input type="radio" name="q6" value="d">Posting anonymously on social media<br>
                  </li>
                  <li>
                    <h3>Which of the following is a potential consequence of falling victim to social engineering?</h3>
                    <input type="radio" name="q7" value="a">Winning a prize<br>
                    <input type="radio" name="q7" value="b">Compromising personal information<br>
                    <input type="radio" name="q7" value="c">Getting a minor demotion at work<br>
                    <input type="radio" name="q7" value="d">Becoming famous on social media<br>
                  </li>
                  <li>
                    <h3>What is a common red flag that might indicate a social engineering attempt?</h3>
                    <input type="radio" name="q8" value="a">Someone asking for help with homework<br>
                    <input type="radio" name="q8" value="b">Receiving an unexpected email asking for login credentials<br>
                    <input type="radio" name="q8" value="c">A friend liking your social media post<br>
                    <input type="radio" name="q8" value="d">Getting a letter from a relative<br>
                  </li>
                  <li>
                    <h3>What is the best way to protect yourself from social engineering attacks?</h3>
                    <input type="radio" name="q9" value="a">Ignoring all messages from unknown senders<br>
                    <input type="radio" name="q9" value="b">Sharing personal information freely<br>
                    <input type="radio" name="q9" value="c">Regularly updating antivirus software<br>
                    <input type="radio" name="q9" value="d">Being cautious and skeptical of unexpected requests for information or action<br>
                  </li>
                  <li>
                    <h3>Which of the following is an example of an offline social engineering attack?</h3>
                    <input type="radio" name="q10" value="a">Clicking on a suspicious link in an email<br>
                    <input type="radio" name="q10" value="b">Creating a strong password for an online account<br>
                    <input type="radio" name="q10" value="c">Dumpster diving to find sensitive documents<br>
                    <input type="radio" name="q10" value="d">Accepting a friend request from a stranger on social media<br>
                  </li>
                </ol>
                <input type="submit" value="Submit Quiz">
              </form>
            
        </div><!--End of Course-->
    </body>
</html>
