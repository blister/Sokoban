<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!--[if lt IE 9]><script src=http://html5shiv.googlecode.com/svn/trunk/html5.js></script><![endif]--> 
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">


  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css?v=2">

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->
 
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.6.min.js"></script>

</head>

<body>

  <div id="container">
	<header> 
		<hgroup> 		
			<nav id=global> 
				<ul> 
					<li><a href=#>Home</a></li> 
					<li><a href=#>Requests</a></li> 
					<li id=services> 
						<a href=#>Warehouse</a> 
						<ul id=subMenu> 
							<li><a href=#>Inventory</a></li> 
							<li><a href=#>Move Order</a></li>  
						</ul> 
					</li> 
					<li><a href=#>Items</a></li> 
					<li><a href=#>Reports</a></li> 
					<li id="logo"><a href=#>SOKOBAN</a></li>
				</ul> 
					
			</nav>
		</hgroup>  
	</header> 
	 
	<div class=clearfix> 
		<div id=content> 
			<article> 
				<header> 
					<div class=time> 
						<div class=year>2010</div> 
						<div class=date>16<span>apr</span></div> 
					</div> 
					<h1>ACTIVE ORDERS</h1> 
					<div class=comments>1</div> 
				</header> 
				<p>Insert Grid here</p> 
				<footer> 
					<em>Written by:</em> <strong>Marc Stroz</strong> 
					<span class=newLine><em>Tags:</em> <a class=tags href=#>Dell</a><a class=tags href=#>Cisco</a><a class=tags href=#>network</a></span> 
				</footer> 
			</article> 
		</div> 
		
		<aside> 
			<section> 
				<h1>Tracking Information</h1> 
				<ul id=inTouch> 
					<li><span class=twitter>12345</span> <a href=#>Current RFQ's</a></li> 
					<li><span class=rss>4321</span> <a href=#>Items </a> in warehouse</li> 
				</ul> 
			</section> 
			
			<nav> 
				<h1>Internal Forms</h1> 
				<ul class=links> 
					<li><a href=#>No Clue</a></li> 
					<li><a href=#>No Clue 2</a></li> 
					<li><a href=#>No Clue 3</a></li> 
				</ul> 
			</nav> 
			
			<section> 
				<blockquote>It's only worth it if you buy it and deliver it</blockquote> 
				<a class=twitterHandle href=#>@FGT323</a> 
			</section> 
		</aside> 
	</div> 
	 
	<footer class=clearfix> 

			<section> 
				<h1>Active Orders</h1> 
				<ul id=comments> 
					<li> 
						<a href=#>3 French Hens</a> 
						<span class=newLine><strong>Comment Author</strong>, 20. 04. 2010.</span> 
					</li> 
					<li> 
						<a href=#>2 Turtle Doves</a> 
						<span class=newLine><strong>Comment Author</strong>, 5. 04. 2010.</span> 
					</li> 
					<li> 
						<a href=#>Partridge in a pear tree</a> 
						<span class=newLine><strong>Comment Author</strong>, 28. 03. 2010.</span> 
					</li> 
				</ul> 
			</section> 
			<section> 
				<h1>Insert something Here</h1> 
				
			</section> 
		<p class=copyright>Copyright &copy; 2011 <strong>SOKOBAN</strong>. All Rights Reserved.</p> 
	</footer> 
  </div> <!--! end of #container -->


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
  
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>-->
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]

  <!-- yui profiler and profileviewer - remove for production-->
  <script src="js/profiling/yahoo-profiling.min.js"></script>
  <script src="js/profiling/config.js"></script> 
  <!-- end profiling code -->


  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
       change the UA-XXXXX-X to be your site's ID 
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>-->
  
</body>
</html>