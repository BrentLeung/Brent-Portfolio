<?php
if (!empty($_POST)) {

  $validForm = true;

  $errors = array();

  if (!isset($_POST['myForm'])){
    $_POST['myForm'] = array();
  }

  if (empty($_POST['name'])) {

    $validForm = false;

    $errors['name'] = true;
  }

  if (empty($_POST['email']) || strpos($_POST['email'], '@') === false) {

    $validForm = false;

    $errors['email'] = true;

  }

  if ($validForm) {

    $to = 'brentleung@mac.com';

    $subject = 'Question / Comments for Brent';


    $message="Subject:   $subject\r\n";

    // $message .= "Form Name:  {$_POST['formName']}\r\n\r\n";

    $message .= "Name:  {$_POST['name']}\r\n";

    $message .= "Email Address:   {$_POST['email']}\r\n";

    $message .= "Phone:   {$_POST['phone']}\r\n";

    // $message .= "Message:  {$_POST['message']}\r\n";

    if ($_POST['message']) {

      $message .= "Comments:  {$_POST['message']}\r\n";

    }

    $headers = "From: {$_POST['email']}\r\n";

    mail($to,$subject,$message,$headers);

    header("Location: thank-you.php#thankYou");


    exit;

  }

}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<!-- favicons -->
<?php include ("favicons.php");?>
<!-- favicons End -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Brent Leung is a Vancouver based font-end web developer specializing in HTML, CSS3, jQuery/JavaScript, and responsive design. Take a look at his portfolio and connect with him today about your next project">
<title>Brent Leung Vancouver Front-end Web Developer Portfolio</title>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:900"><!-- Font Weight 59KB -->
<link rel="stylesheet" href="css/global-min.css"> 
<link rel="stylesheet" href="css/animations-min.css">
<!--[if lte IE 9]>
      <link rel="stylesheet" href="css/animations-ie-fix.css">
<![endif]-->
<script src="scripts/modernizr.custom.96922.js"></script>
</head>
<body>
<!-- Googel Analytics -->
<?php include_once("analyticstracking.php"); ?>
  <div id="contentContainer">
    <header class="cd-header">
       <!-- primary-nav-trigger -->
       <a class="cd-primary-nav-trigger" href="#0">
         <span class="cd-menu-icon"></span>
       </a> 
    </header>
    <!-- global navigation -->
    <nav>
      <ul class="cd-primary-nav">
            <li><a href="index.php" class="home" title="Brent's Portfolio">Home</a></li>
            <li><a href="index.php#portfolio" class="portfolio" title="Brent's Portfolio">Portfolio</a></li>
            <li><a href="index.php#about" title="About Me">About Me</a></li>
            <li><a href="index.php#contact" title="Contact Me">Let's Connect</a></li>
      </ul>
    </nav>   
    <section id="container">
      <div id="intro">
          <div class="title">
            <h1>Brent Leung</h1>
            <h2>Front-end Web Developer</h2>
          </div>
        <a href="#portfolio" title="Brent's portfolio" class="scroll"><img src="images/scroll-down.svg" alt="downward pointing arrow"></a>
      </div>
      <div class="parallax-one">
       <!-- This houses the homepage featured background image  -->
      </div>
      <!-- Portfolio -->
      <article id="portfolio">
        <h1>Portfolio</h1>
        <div id="portfolioContainer" class="clearfix">
          <div class="grid animatedParent animateOnce" data-sequence='100'>
                <figure class="effect-apollo animated fadeInUpShort" data-id='1'>
                  <img src="images/jasonCunningham-portfolio.jpg" alt="Jason Cunningham looking out onto a calm lake">
                  <figcaption>
                    <h2>Jason Cunningham</h2>
                    <h3>HTML, CSS, Responsive, JavaScript</h3>
                    <p>View project</p>
                    <a href="jason-cunningham.php" title="Porject details" class="animsition-link" data-animsition-out="fade-out">View more</a>
                  </figcaption>     
                </figure>
                <figure class="effect-apollo animated fadeInUpShort" data-id='4'>
                  <img src="images/breanOfNewLife.jpg" alt="Group of orphans in Kenya">
                  <figcaption>
                    <h2>Bread of New Life</h2>
                      <h3>HTML, CSS, Responsive, jQuery</h3>
                    <p>View project</p>
                    <a href="bread-of-new-life.php" title="Porject details" class="animsition-link" data-animsition-out="fade-out">View more</a>
                  </figcaption>     
                </figure>
                <figure class="effect-apollo animated fadeInUpShort" data-id='5'>
                  <img src="images/hotel2.jpg" alt="Low angle shot of the Regis Hotel">
                  <figcaption>
                    <h2>Hotel Regis</h2>
                    <h3>HTML, CSS, Responsive, jQuery</h3>
                    <p>View project</p>
                    <a href="regis-hotel.php" title="Porject details" class="animsition-link" data-animsition-out="fade-out">View more</a>
                  </figcaption>     
                </figure>
                <figure class="effect-apollo animated fadeInUpShort" data-id='8'>
                  <img src="images/africanSafari.jpg" alt="Lioness yawning">
                  <figcaption>
                    <h2>An African Safari</h2>
                    <h3>HTML, CSS, Responsive, jQuery</h3>
                    <p>View project</p>
                    <a href="african-safari.php" title="Porject details" class="animsition-link" data-animsition-out="fade-out">View more</a>
                  </figcaption>     
                </figure>
                <figure class="effect-apollo animated fadeInUpShort" data-id='9'>
                  <img src="images/cictanBiotech.jpg" alt="close up of a female model surrounded by berries">
                  <figcaption>
                    <h2>CICTAN BIOTECH</h2>
                    <h3>Project Management</h3>
                    <p>View project</p>
                    <a href="cictan-biotech.php" title="Porject details" class="animsition-link" data-animsition-out="fade-out" data-animsition-out="fade-out">View more</a>
                  </figcaption>     
                </figure>
                <figure class="effect-apollo animated fadeInUpShort" data-id='10'>
                  <img src="images/drHeSpa.jpg" alt="close up of a model">
                  <figcaption>
                    <h2>Dr. He Spa</h2>
                    <h3>Project Management</h3>
                    <p>View project</p>
                    <a href="dr-he-spa.php" title="Porject details" class="animsition-link" data-animsition-out="fade-out" data-animsition-out="fade-out">View more</a>
                  </figcaption>     
                </figure>
              </div>
        </div>
      </article>
      <!-- About Brent  -->
      <article id="about" class="clearfix">
        <div id="mobileH1">
          <h1>About Me</h1>
          <hr class="hr-about">
        </div>
          <div id="aboutImage" class="divHeight">
            <img src="images/brentBio-01.jpg" alt="Image of Brent">                
           </div>
           <div id="aboutDescription" class="divHeight">
              <h1>About Me</h1>
              <hr class="hr-about">
              <p>Hi, my name is Brent Leung and I look forward to meeting you.</p>
              <p>I’m a skilled and innovative front-end developer based in Vancouver with proficiency in a number of technologies including HTML, CSS3/Sass, JavaScript/ jQuery, and responsive design.</p>
              <p>A graduate of BCIT’s New Media Design &amp; Web Development program, I am experienced in coding and project managing a diverse range of websites that maximize User Experience for various audiences.</p>
              <p>I combine technical precision with a fresh, creative approach, applying strategic thinking to each project while pushing the boundaries of “the typical” to customize websites that best meet the goals of each project.</p>
              <p>When I’m not working on my next web project, I can be found honing my latte-making skills, working up a sweat at crossfit or bootcamp class, or exploring the great outdoors.</p>
          </div>
      </article>
      <!-- Contact --> 
      <article id="contact">
          <h1>Let's Connect</h1>
          <p>Interested in working together, or have a project you would like to explore? I'd love to chat.</p>
            <div class="social-media">
              <a href="https://ca.linkedin.com/pub/brent-leung/14/932/243" target="_blank" title="Link to Brent's LinkedIn profile"><div class="social-media-icons linkedIn"></div></a>
              <a href="https://www.goodreads.com/user/show/21174414-brent-leung" target="_blank" title="Link to Brent's Goodreads account"><div class="social-media-icons goodreads"></div></a>
            </div>
            <div id="contact-area">
                    <form id="contactForm" method="post" action="index.php" autocomplete="off">
                       <input type="text" name="name" class="required" id="name" placeholder="Name" required>
                       <input type="text" name="email" class="required" id="Email" placeholder="E-mail" required>
                       <input type="text" name="phone" id="phone" placeholder="Phone">
                       <textarea name="message" rows="20" cols="20" id="Message" placeholder="Message"></textarea>
                       <input type="submit" name="submit" class="submit-button" value="Submit">
                    </form>
              </div>
      </article>
    </section>
    <footer><h4>&copy; 2015 Brent Leung</h4></footer>
  </div> <!-- end contentContainer -->
</body>
<!-- jQuery Library  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Concatenated Minified JS Files -->
<script src="scripts/master-script-homepage.js"></script>
</html>