<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<!-- favicons -->
<?php include ("favicons.php");?>
<!-- favicons End -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="Read the case study for An African Safari. Brent Leung is a Vancouver based font-end web developer specializing in HTML, CSS3, jQuery/JavaScript, and responsive design.">
<title>An African Safari Case Study | Brent Leung, Web Developer</title>
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
		<div id="featureImage" class="africanSafari">
			<div id="featureTitle">
		    	<h1 class="main-heading">An African Safari</h1>
		    	<a href="http://africansafari.brentleung.com/" target="_blank" title="Link to an African Safari photo diary">
		    		<button>View Completed Site</button>
		    	</a>
		    </div>
		</div>
		<!-- Project Overview -->
		<article class="case-study-intro animatedParent animateOnce" data-appear-top-offset="-400">
				<h2>The Project</h2>
				<p><span class="italics">An African Safari</span> is a photo diary website that chronicles my family’s journey through Kenya in 2014; it primarily served as an exercise using various jQuery plugins, such as Masonry. The photos capture memorable sights during the nine days we spent traversing through the Maasai Mara, the Samburu National Reserve, and a private white rhino wildlife sanctuary nestled between the lofty slopes of Mount Kenya and the Aberdare Mountains.</p>
				<img class="animated fadeInUp" src="images/safari-responsive.jpg" alt="The safari website seen on a desktop, tablet, and phone">
		</article>
		<!-- The Process -->
		<article class="the-process clearfix animatedParent animateOnce" data-appear-top-offset="-300">        
			<h2><span class="orange">The Process</span></h2>
			<div class="process-left divHeight animated fadeInLeft">
				<img src="images/lions-in-field.jpg" alt="Lioness looks out into the Maasai Mara"> 
			</div>
			<div class="process-right divHeight">
				<h3><span class="orange">The Requirements</span></h3>
				<p>The site would feature more than 100 photographs, so I needed a dynamic way of view the photos. Masonry was chosen as a plugin to allow for dynamic browser resizing. A lightbox (Fancybox) was added for displaying the higher-resolution photos. A slight zoom was needed as a hover state for microinteractions with users, and the site would have to be responsive (although the experience is best viewed on a tablet-sized device or larger).</p>
				<h3><span class="orange">The Challenge</span></h3>
				<p>Local testing revealed no issues across all major browsers, but when the site was uploaded to the server, the div container that housed the photos collapsed, causing photos to overlap with one another.</p>
			</div>
		</article>
			<!-- The Solution -->
			<article class="the-solution clearfix animatedParent animateOnce" data-appear-top-offset="-400">         	
				<h2>The Solution</h2>
				<p>A side-by-side comparison between the local site and live site revealed that the container height was the only variation. Due to the voluminous amount of photos and potential speed issues with the hosting company’s server, the browser – for some reason – was unable to calculate the container height.</p>
				<p>As such, an “!important” css style was added, attempting to force the container height on the live site. This temporary fix failed as the browser overrode the css statement and the container continued to collapse.</p>
				<p>Ultimately, Lazy Load was used to fix the calculation issue, where I loaded 40 photos initially and then had additional photos load as the user approached  within 200px of the bottom of the viewport.</p>
				<img class="animated slow fadeInUp" src="images/safari-compare-files.jpg" alt="Side-by-side comparison of the online and offline site">
			</article>	
			<!-- Before and After -->
			<article class="before-and-after animatedParent animateOnce" data-sequence="300" data-appear-top-offset="500">
				<h2><span class="orange">Before &amp; After</span></h2>
				<img class="animated fadeInUpShort" data-id='1' src="images/safari-before-lazy-load.jpg" alt="The collapsed site before adding Lazy Load">
				<a href="http://africansafari.brentleung.com/" target="_blank" title="Link to an African Safari photo diary">
					<img class="animated fadeInUpShort" data-id='2' src="images/safari-after-lazy-load.jpg" alt="The completed site after adding Lazy Load">
				</a>
				<!-- local page navigation  -->
				<article id="secondaryNav">
					<div id="local-nav">
						<a href="regis-hotel.php" class="arrow left animsition-link" data-animsition-out="fade-out"></a>
							<h3>View More Projects</h3>
						<a href="cictan-biotech.php" class="arrow right animsition-link" data-animsition-out="fade-out"></a>
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