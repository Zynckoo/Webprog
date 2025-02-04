<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Concepcion Portfolio Website</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/b2fad240b5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="header">
            <div class="container">
                <nav>
                    <img src="images/J.png" class="logo">
                    <ul id="sidemenu">
                        <li>Home</a></li>
                        <li>About</a></li>
                        <li>Service</a></li>
                        <li>Portfolio</a></li>
                        <li>Contact</a></li>
                        <i class="fa-solid fa-circle-xmark"></i>
                    </ul>
                    <i class="fa-solid fa-bars"></i>
                </nav>
                <div class="header-text">
                    <p> Programmer ng Mundo <span>Justine</span> </p>

                </div>
            </div>
        </div>
        <!-- About -->
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="about-col-1">
                        <img src="images/User2.png">
                    </div>
                    <div class="about-col-2">
                        <h1 class="sub-title"> About Me </h1>
                        <p>Hello! I'm Justine Altaire B. Concepcion, an Information Technology professional passionate about developing innovative software solutions. With a strong foundation in programming languages like Java and Python, I enjoy creating user-friendly applications and solving complex problems.
                            Currently pursuing my studies in Information Technology, I've worked on projects such as MAPGO, a navigation system designed to provide accurate and seamless navigation. My goal is to leverage technology to address social issues and promote inclusivity. 
                            Beyond coding, I stay updated on the latest tech advancements, participate in hackathons, and contribute to open-source projects. I'm always eager to learn and collaborate on exciting initiatives.</p>
                        <div class="tab-titles">
                            <p2 class="tab-links active-link" onclick="opentab('skills')">Skills</p2>
                            <p2 class="tab-links" onclick="opentab('skills')">Experience</p2>
                            <p2 class="tab-links" onclick="opentab('skills')">Education</p2>
                        </div>
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                                <li><span>Web Development</span><br>Web application Development</li>
                                <li><span>App Development</span><br>Building iOS apps/Android apps</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>2033-Current</span><br>IT Consultant, IBM</li>
                                <li><span>2029-2033</span><br>Frontend Developer, Apple</li>
                                <li><span>2027-2029</span><br>Junior Software Engineer, Microsoft</li>
                                <li><span>2026-2027</span><br>Software Developer Intern, Google</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2027-2028</span><br>Massachusetts Institute of Technology</li>
                                <li><span>2023-2026</span><br>Asia Pacific College/National University Fairview</li>
                                <li><span>2021-2022</span><br>AMA Fairview</li>
                                <li><span>2020</span><br>National College of Business and Arts</li>
                                <li><span>2015-2019</span><br>Far Eastern University Diliman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services -->
        <div id="services">
            <div class="container">
                <h1 class="sub-title"> My Services</h1>
                <div class="services-list">
                    <div>
                        <i class="fa-solid fa-object-group"></i>
                        <h2>UI/UX Design</h2>
                        <p>Designing intuitive user interfaces and enhancing user experiences to ensure smooth and enjoyable interactions.</p>
                        <p3>Learn More</p3>
                    </div>
                    <div>
                        <i class="fa-solid fa-code"></i>
                        <h2>Side Server Programming</h2>
                        <p>Building secure and efficient server-side applications using languages like Python, Node.js, Java, and PHP.</p>
                        <p3>Learn More</p3>
                    </div>
                    <div>
                        <i class="fa-brands fa-connectdevelop"></i>
                        <h2>Database Design and Management</h2>
                        <p>Creating and managing scalable databases using SQL and NoSQL technologies like MySQL, PostgreSQL, and MongoDB.
                        </p>
                        <p3>Learn More</p3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio -->
        <div id="portfolio">
            <div class="container">
                <h1 class="sub-title">My Work</h1>
                <div class="work-list">
                    <div class="work">
                        <img src="images/work-1.png">
                        <div class="layer">
                            <h3>Travel Booking System</h3>
                            <p>Develop a travel booking system where users can search for flights, hotels, and book them.</p>
                            <i class="fa-solid fa-square-up-right"></i>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/work-2.png">
                        <div class="layer">
                            <h3>Music Application</h3>
                            <p>Develop a music streaming application that allows users to search for songs, create playlists, and stream music. Users should be able to sign up, log in, and personalize their music experience.</p>
                            <i class="fa-solid fa-square-up-right"></i>
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/work-3.png">
                        <div class="layer">
                            <h3>E-Commerce Platform</h3>
                            <p>Develop a full-featured e-commerce website with product listings, a shopping cart, user authentication, and payment processing.</p>
                            <i class="fa-solid fa-square-up-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contacts -->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title"> Contact Me </h1>
                        <p><i class="fa-solid fa-paper-plane"></i>justinealtaireconcepcion@gmail.com</p>
                        <p><i class="fa-solid fa-phone"></i>09216915436</p>
                        <div class="social-icons">
                            <a href="https://facebook.com"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://gmail.com"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                        <a href="images/ResumeJustineConcepcion.pdf" class="btn btn2" download="ResumeJustineConcepcion.pdf" aria-pressed="true">Download CV</a>
                    </div>
                    <div class="contact-right">
                        <form name="submit-to-google-sheet">
                            <input type="text" name="Name" placeholder="Enter Name" required>
                            <input type="email" name="Email" placeholder="Enter Email" required>
                            <textarea name="Message" rows="6" placeholder="Message Us"></textarea>
                            <button type="submit" class="btn btn3" name=btn_sub> Send </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © Justine</p>
            </div>
        </div>
    </body>
</html>

<?php
    include("connectionexam.php");

    if (isset($_POST['btn_sub'])) {
        $na = $_POST['name'];
        $em = $_POST['email'];
        $ms = $_POST['message'];

                $sqlInsert = "INSERT INTO `tbl_contactus` (`name`,`email`,`message`)
                    VALUES ('".$na."','".$em."','".$ms."')";

                if ($con->query($sqlInsert) == TRUE) {
                    Print '<script>alert("successful!")</script>';
            }
        }

?>
