<?php include('./include/db.php');
session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Personnal Portfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/JQuery3.3.1.js"></script>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link rel="icon" href="./img/icon.png">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="./css/style1.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">PORTFOLIO</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="http://localhost:8080/My_Portfolio/admin/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/Main.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">I am Soufiane EL Kadiri</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Frontend Developer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/me.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Soufiane EL Kadiri</span></p>
                      <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                      <p><span class="title-s">Email: </span> <span>kadirisoufiane99@gmail.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>(212) 60428-4395</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Tools</p>
                  <span>Git</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="85" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Adobe Xd</span> <span class="pull-right">60%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Photoshop</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Adobe Premiere</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                  I started learning programming when i was 18 , and I find myself interested in this domain.
                  after that I completed my studies at the Institute of Applied Technology,
                  </p>
                  <p class="lead">
                  majoring in Informatics, and then I wanted to develop myself more in this field ,
                  so I joined a school called YouCode that teach this subject. 
                  </p>
                  <p class="lead">
                  I learned some new things about HTML & CSS, JavaScript and php,
                   beside to Adobe XD and more. don't hesitate to see my works.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Skills
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-camera"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Design Tools</h2>
              <p class="s-description text-center">
                Adobe Xd , Illustrator , Photoshop , Balsamic .
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Programming Language</h2>
              <p class="s-description text-center">
                HTML5 , CSS3 , JavaScript , Asp.Net , SqlServer , PHP .
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-laptop"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Other Tools</h2>
              <p class="s-description text-center">
                Git , Github , Trello , Word , Excel , Kanban ,Linux .
              </p>
            </div>
          </div>
        </div>
  </section>
  <!--/ Section Services End /-->
  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio">
	<!--heading----------->
	<h1 class="p-headind">WORKS</h1>
	<!--portfolio-container------------>
	<div class="p-container">
	<!--portfolio-box-1-------->
	<?php
                    $query5 = "SELECT * FROM portfolio";
                            $runquery5= mysqli_query($db,$query5);
                            while($data5=mysqli_fetch_array($runquery5)){
    ?>
      <div class="p-box">
               <a href="<?php echo $data5['projectlink']?>"><img src="img/<?=$data5['projectpic']?>"></a>
           </div>


        <?php
}
                    ?>
		
	</div>
	</section>
  <!--/ Section Portfolio End /-->
  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Me Message
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Contact Info
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                    if you have any doubt or any projects  don't hesitate to contact me,this is my personal information.
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> Qu Amal Rue Zaouia N°36 </li>
                      <li><span class="ion-ios-telephone"></span> (212) 60428-4395</li>
                      <li><span class="ion-email"></span> kadirisoufiane99@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/soufiane.elkadiri.10/" target="_blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                     <li><a href="https://www.linkedin.com/in/soufiane-el-kadiri-724a43198/" target="_blank"> <span class="ico-circle"> <i class="ion-social-linkedin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Soufiane EL Kadiri</strong>. All Rights Reserved</p>
              <div class="credits">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
