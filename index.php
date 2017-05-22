<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Benjamin Kushner | Workforce Development ">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">    
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">        
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">        
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        
    
    <title>Benjamin M. Kushner | Workforce Development </title>
</head>

<body>
    <header>
            <nav>
                <div class="row">
                    <h1 class="name">Benjamin M. Kushner</h1>        
                    <ul class="nav">
                        <li><a href="#services">Services</a><li>
                        <li><a href="#profile">About</a><li>
                        <li><a href="#contact">Contact</a><li>
                    </ul>     
                </div>
            </nav>

            <div class="row">                
                <div class="hero-text">                    
                    Collaborative strategist for workforce development challenges
                </div>            
          </div>          
    </header>

    <section id="profile" class="profile js--section--profile">
        <div class="row">
            <div class="col span-1-of-2 img-box">
                <img src="./resources/images/headshotcrop.jpg" alt="">
            </div>
            <div class="col span-1-of-2 long">
                Ben Kushner has been a Workforce Analyst for almost 20 years.  During that time, he’s handled 
    federal technical assistance contracts that are funded by the Workforce Innovation and Opportunity Act and by the Affordable Care Act. He is based in Los Angeles.<br> 
                <br>
                For a complete bio, <br><a href="resources/images/benjaminkushner-bio.pdf" target="_blank"><button type="button" class="btn btn-info">click here</button></a><br><br>
                For a list of past projects and his resume, <br><a href="resources/images/benjaminkushner-resume.pdf" target="_blank"><button type="button" class="btn btn-info" >click here</button></a>                                           
            </div>            
        </div>   
    </section>

    <section id="services" class="services">
        <div class="row">
            <div class="col span-1-of-3">
                <h2>Services</h2>
            </div>
            <div class="col span-1-of-3">
                <ul style="list-style-type:circle">
                    <li>Career Services</li>
                    <li>Business Services</li>
                    <li>AJC/One-Stop Operations</li>
                    <li>WIOA Implementation</li>
                    <li>Facilitation</li>
                    <li>Career Pathways</li>
                    <li>Sector Strategies</li>
                    <li>Strategic Planning</li>                
                </ul>     
            </div>
            <div class="col span-1-of-3">
                <ul style="list-style-type:circle">
                    <li>Resource Mapping</li>
                    <li>Reentry Employment</li>
                    <li>Pre-Apprenticeship</li>
                    <li>Registered Apprenticeship</li>
                    <li>On-the-Job Training</li>
                    <li>Reemployment</li>
                    <li>Regionalism</li>
                </ul>
                
            </div>            
        </div>
    </section>

    <section id="contact">
        <div class="row" id="form">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you your message has been sent</div>";
                            }
                            if($_GET['success'] == - 1) {
                                echo "<div class=\"form-messages error\">Something went wrong! Please try again.</div>"; 
                            }
                            
                        ?>
                    </div>
                    <div class="row">                        
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>                                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop me a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                    
                </form>
            </div>
            <div>
                <a class="designed" href="http://samnagourney.com" target="_blank">Designed and developed by Sam Nagourney</a>    
            </div> 

    </section>

    <script src="vendors/js/jquery-3.2.1.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="vendors/js/jquery.scrollTo.min.js"></script>
    <script src="vendors/js/jquery.localScroll.min.js"></script>
    <script src="resources/js/index.js"></script>
    
</body>
</html>