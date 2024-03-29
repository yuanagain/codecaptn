<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor Education Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.html"><img class="logo" src="img/logo_symbol.png"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="btn-trial"><a href="#contact">Get In Touch</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <img class="logo" src="img/logo.png" />
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">Make your students  AP Computer Science heros.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h4>CodeCaptain increases student performance and makes teaching easier through its interactive online platform.
</h4>

          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Make Homework Beautiful, Simple, and Effective</h4>
                  <p>Create and manage assignments with ease. Enable students to write, compile, and submit code in the browser. Leverage the assignment library to build out lesson plans.
                  </p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-desktop"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Focus on Teaching, Not Grading</h4>
                  <p>Automate grading and save time. Generate detailed reports to isolate student weak spots. Ensure integrity with the plagiarism detection engine. </p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-gears"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Engage with Students</h4>
                  <p>Receive notifications from AI assistant when students are struggling. Leave in-live comments on active assignments. Enable interactive learning through pair programming.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-handshake-o"></i>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->
    <!--Testimonial-->
    <section id="testimonial" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2 class="white">Trusted By Teachers</h2>
          </div>

          <div class="col-md-12 col-sm-12">
            <div class="text-comment text-center">
              <p class="text-par">“As a new CS teachers, my lesson planning used to take five hours a week and I still made mistakes; now I use CodeCaptain’s prebuilt lessons and it takes 20 minutes, and everything’s flawless. I used to spend 10 hours grading a week; I spend 30 minutes now. This gives me more time to answer student questions and engage with parents, and the results show it.”</p>
              <p class="text-name">Anonymous, AP CS teacher at mid-sized public school</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Testimonial-->
    <!--Contact-->
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Contact Us</h2>
            <p>Send us a message if you think your school would be interested in our beta.</p>
          </div>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="mail.php" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-xs-12">
                <!-- Button -->
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
              </div>
          </form>
          
        </div>
      </div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">
        ©2017 CodeCaptain. All rights reserved.
      </div>
    </footer>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>