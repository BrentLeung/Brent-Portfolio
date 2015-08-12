<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<!-- favicons -->
<?php include ("favicons.php");?>
<!-- favicons End -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="Read the case study for the Regis Hotel. Brent Leung is a Vancouver based font-end web developer specializing in HTML, CSS3, jQuery/JavaScript, and responsive design.">
<meta name="robots" content="noindex">
<title>Hotel Regis Case Study | Brent Leung, Web Developer</title>
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
<div id="contentContainer" class="animsition">
   	<!-- Header and Global Nav -->
    <?php include ("header-and-nav.php");?>     
    <!-- Content Banner -->
    <section>
		<div id="featureImage" class="regisHotel-image">
			<div id="featureTitle">
		    	<h1 class="main-heading">Hotel Regis, Mexico</h1>
		    	<a href="http://regishotel.brentleung.com/" target="_blank" title="Link to the new Regis Hotel website">
		    		<button>View Completed Site</button>
		    	</a>
		    </div>
		</div>
		<!-- Project Overview -->
		<article class="case-study-intro animatedParent animateOnce animateOnce" data-appear-top-offset="-400">
			<h2>The Project</h2>
			<p>The Hotel Regis is a boutique hotel located in Uruapan, Mexico. A hotel representative approached our design team with a request to completely redesign the hotel’s website, as its original site was not only out of date, but was built entirely in flash, was non-responsive, and had numerous broken links. Additionally, it wasn't optimized for search engines and lacked even the basic SEO criteria, such as a title tag.</p>
			<img class="animated fadeInUp slow" src="images/regis-responsive.jpg" alt="The Regis Hotel's site seen on a desktop, tablet, and phone">
		</article>
		<!-- The Process -->
		<article class="the-process clearfix animatedParent animateOnce" data-appear-top-offset="-300">        
			<h2><span class="orange">The Process</span></h2>
			<div class="process-left divHeight animated fadeInLeft">
				<img src="images/regis-process.png" alt="Mood board with colour scheme ideas"> 
			</div>
			<div class="process-right divHeight">
				<h3><span class="orange">The Challenge</span></h3>
				<p>From the very beginning, I knew the main challenge would be content. The entirety of the site's content – five pages in total – was comprised of a mere 377 words. And if content describing third-party local attractions was removed, the word count on the hotel itself would be reduced down to 187 descriptive words. Although additional content would have been helpful, the hotel's owner did not provide any additional content. He also did not want to display room prices, the restaurant’s menu, or allow the user to book a room online.</p>
				<h3><span class="orange">The Requirements</span></h3>
				<p>The redesigned website would need to tell a logical story, be visually appealing to the user, be responsive, be optimized for speed as well as for search engines, and be hand-coded to accommodate the unique design requirements.</p>
			</div>
			</article>
		<article class="the-solution animatedParent animateOnce clearfix">         	
			<h2>The Solution</h2>
			<p>I decided to code the site as a parallax because 1) the limited content would render a multiple page website ineffective, and 2) this format allowed us to tell a logical story, beginning with an introduction to the hotel and its history, followed by a strong call to action to book a reservation, then ending with a description of local attractions, the culinary offerings, and again, the option to contact the hotel about reserving a room.</p>
			<img class="regis-parallax animated fadeInLeft" src="images/regis-parallax.jpg" alt="Preview of the parallax site broken up into four secions"> 
		</article>	
		<!-- Before and After -->
		<article class="before-and-after animatedParent animateOnce" data-sequence='300' data-appear-top-offset='-200'>
			<h2><span class="orange">Before &amp; After</span></h2>
			<img class="animated fadeInUpShort" data-id='1' src="images/regis-original.jpg" alt="Original Regis design">
			<a href="http://regishotel.brentleung.com/" target="_blank" title="Link to the new Regis Hotel website">
				<img class="animated fadeInUpShort" data-id='2' src="images/hotel-regis-after.jpg" alt="Regis redesign">
			</a>
				<!-- local page navigation  -->
				<article id="secondaryNav">
					<div id="local-nav">
						<a href="bread-of-new-life.php" class="arrow left animsition-link" data-animsition-out="fade-out"></a>
							<h3>View More Projects</h3>
						<a href="african-safari.php" class="arrow right animsition-link" data-animsition-out="fade-out"></a>
					</div>
					<p><a href="index.php#portfolio">Back To Portfolio</a></p>
				</article>
			</article>
    </section> 
    <footer>
    	<h4>&copy; 2015 Brent Leung</h4>
    </footer>
</div> <!-- end contentContainer -->
 <a href="#0" class="cd-top">Top</a>
</body>
<!-- jQuery Library  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Concatenated Minified JS Files -->
<script src="scripts/master-script.js"></script>
</html>