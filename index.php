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
                        <li><a href="#bio">About</a><li>
                        <li><a href="#profile">Profile</a><li>
                        <li><a href="#contact">Contact</a><li>
                    </ul>     
                </div>
            </nav>

            <div class="row">                
                <div class="hero-text">                    
                    Technical Assistance in Workforce Development, Capacity Building, and WIOA Implementation
                </div>            
          </div>
          <div class="row image-caption">
              Australia, February 2013
          </div>            
    </header>

    <section id="profile" class="profile">
        <div class="row">
            <div class="col span-1-of-3 img-box">
                <img src="./resources/images/headshotcrop.jpg" alt="">
            </div>
            <div class="col span-1-of-3 image-text">                
                Career Services<br>
                Business Services<br>
                AJC/One-Stop Operations<br>
                WIOA Implementation<br>
                Facilitation<br>
                Career Pathways<br>
                Sector Strategies<br>
                Strategic Planning<br>                
            </div>
            <div class="col span-1-of-3 image-text">
                Resource Mapping<br>
                Reentry Employment<br>
                Pre-Apprenticeship<br>
                Registered Apprenticeship<br>
                On-the-Job Training<br>
                Reemployment<br>
                Regionalism<br>
            </div>
        </div>   
    </section>

    <section id="bio" class="bio js--section--bio">
        <div class="row">
            <div class="col span-1-of-3 long">
                Ben Kushner has been employed in career, education and workforce development since the establishment of the Workforce Investment Act in 1998.  After sixteen years as a commodities trader and marketing manager, he launched a career change, taking full advantage of the dislocated worker services offered at a WIA-funded program in New York City.  He was counseled by a team of career management professionals and then became one himself after receiving training and certification at New York University’s Center for Career, Education and Life Planning.  
            </div>
            <div class="col span-1-of-3 long">
                In 2001, he went on to help establish the Business Services unit at New York City’s first One Stop Career Center.  From 2001 – 2003, Ben worked as a consultant for the New York City Human Resources Administration where he helped the agency establish programs that served people on public assistance and workers dislocated by the events of 9/11.  
            </div>
            <div class="col span-1-of-3 long">
                Between 2003 and 2010, Ben was a contractor and later, a federal employee at ETA focusing on building the workforce system’s capacity, One Stop operations, reemployment strategies, technical assistance initiatives, and ETA’s web-based communications tools including Workforce3One (now WorkforceGPS) and the Communities of Practice. In 2010, Ben moved to Los Angeles where he has been working as an independent consultant on federal and state workforce development contracts. He earned his bachelor’s degree in Social Science at the State University of New York, College at Purchase. 
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
    </section>

    <script src="vendors/js/jquery-3.2.1.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="vendors/js/jquery.scrollTo.min.js"></script>
    <script src="vendors/js/jquery.localScroll.min.js"></script>
    <script src="resources/js/index.js"></script>
    
</body>
</html>