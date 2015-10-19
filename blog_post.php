<!DOCTYPE html>
<?php
require('dbcon.php');
?>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Page Description">
		<style type="text/css">@-ms-viewport{width: device-width;}</style>
		<title>Caroline Cherotich</title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-44529240-6', 'auto');
		  ga('send', 'pageview');

		</script>			
	</head>

	<body class="single single-post">

		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><a href="home-01.html"><img src="img/logo.png" alt="logo"></a></h1>
					</div><!-- brand -->
					<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					<nav>
						<ul class="reset" role="navigation">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="news.html">News & Events</a></li>
							<li class="menu-item"><a href="blog.html" class="active">Talk to Caroline</a></li>
							<li class="menu-item"><a href="gallery.html">Gallery</a></li>
							<li class="menu-item"><a href="contact.html">Contact Me</a></li>
						</ul>
					</nav>
				</div><!-- row-content -->	
			</div><!-- row -->	
		</header>


		<main role="main">
			<div id="intro-wrap" data-height="30.778">
				<div id="intro" class="preload darken">					
					<div class="intro-item" style="background-image: url(./img/gallery/one.jpg); background-size: banner; background-position: right 0px top 0px;">
						<div class="caption">
							<h2></h2>
						</div><!-- caption -->					
					</div>								
				</div><!-- intro -->
			</div><!-- intro-wrap -->

			<div id="main" class="row">
				<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
					<div id="post-nav">
						<ul class="clear-after reset plain">
							<li id="prev-items" class="post-nav"><a href="#"><i class="fa fa-chevron-left"></i><span class="label hidden-mobile">Prev</span></a></li> 
							<li id="all-items" class="post-nav"><a href="#"><i class="icon icon-images"></i></a></li>
							<li id="next-items" class="post-nav"><a href="#"><span class="label hidden-mobile">Next</span><i class="fa fa-chevron-right"></i></a></li>  
						</ul>
					</div>
					<?php
					$query = mysqli_query($con, "SELECT * FROM articles WHERE ID='".$_GET['id']."'") or die(mysqli_error());
					while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
					$id=$row['ID'];
					?>
					<div class="post-area clear-after">
						<article role="main" class="column nine">
							<h5 class="meta-post"><a href="#"><?php echo $row['Tags']; ?></a>, <a href="#">Design</a> - <time datetime="<?php echo $row['PostedOn']; ?>"><?php echo $row['PostedOn']; ?></time></h5>
							<h1><?php echo $row['Title']; ?></h1>
							<p><?php echo $row['Content']; ?></p>
							<p></p>
							<div class="gallery slider" data-autoplay="false" data-autoheight="true">
								<figure>
									<div><img src="<?php echo $row['Thumbnail']; ?>" alt=""></div>
									<div><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></div>
									<div><img src="http://placehold.it/700x600/ddd/fff&text=Beetle%20image" alt=""></div>
								</figure>
							</div><!-- gallery -->
														
						</article>

						<aside role="complementary" class="sidebar column three last">
							<div class="widget widget_search">
								<form role="search">
									<span class="pre-input"><i class="icon icon-search"></i></span>
									<input type="text" placeholder="Search..." value="" class="plain buffer">
								</form>
							</div>
							<div class="widget">
							<h4>About the Blog</h4>
							<div class="textwidget">
								I get to share my two cents about a number of topics like Entrepreneurship, payment systems and Finance.
							</div><!-- la class="textwidget" è forse generata automaticamente da wp -->
						</div>
						<div class="widget">
							<h4>Recent Posts</h4>
							<ul class="plain">
								<li><a href="#">Fostering entrepreneurship in Africa</a></li>
								<li><a href="#">Start-ups and the challenges they face</a></li>
								<li><a href="#">Finance and digitization in Africa</a></li>
								<li><a href="#">Entrepreneurship insight</a></li>
							</ul>
						</div>							
						</aside>

					</div><!-- post-area -->
					<div class="meta-social">
						<ul class="inline center">
							<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
						</ul>
					</div>
					<!--
					<div class="related clear-after">
						<h4>Related Posts</h4>
						<div class="item">
							<figure><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></figure>
							<a class="overlay" href="#">
								<div class="overlay-content">
									<div class="post-type"><i class="icon icon-search"></i></div>
									<h2>Spicemode</h2>
									<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div><!-- overlay-content 
							</a><!-- overlay 								
						</div>
						<div class="item">
							<figure><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></figure>
							<a class="overlay" href="#">
								<div class="overlay-content">
									<div class="post-type"><i class="icon icon-search"></i></div>
									<h2>In the end</h2>
									<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div><!-- overlay-content 
							</a><!-- overlay 								
						</div>
						<div class="item last">
							<figure><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></figure>
							<a class="overlay" href="#">
								<div class="overlay-content">
									<div class="post-type"><i class="icon icon-search"></i></div>
									<h2>Moove</h2>
									<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div><!-- overlay-content 
							</a><!-- overlay 								
						</div>														
					</div>		
					-->					
					<div id="disqus_thread"></div>
					<div> &nbsp;</div>
					<script type="text/javascript">
						/* * * CONFIGURATION VARIABLES * * */
						var disqus_shortname = 'talktocaroline';
						
						/* * * DON'T EDIT BELOW THIS LINE * * */
						(function() {
							var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
							dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
							(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
				<?php
				}
				?>
					
				</div><!-- row-content -->
			</div><!-- row -->
		</main><!-- main -->

		<footer role="contentinfo">
			<div class="row">
				<div class="row-content buffer clear-after">
					<section id="top-footer">
						<div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
							<h4>Menu</h4>
							<ul class="plain">
								<li><a href="index.html">Home</a></li>
								<li><a href="news.html">News & Events</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="./contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="widget column three">
							<h4>Archives</h4>
							<ul class="plain">
								<li><a href="#">August 2015</a></li>
								<li><a href="#">July 2015</a></li>
								<li><a href="#">June 2015</a></li>
								<li><a href="#">May 2015</a></li>
								<li><a href="#">April 2015</a></li>
							</ul>
						</div>								
						<div class="widget column three">
							<h4>Latest Tweets</h4>
							<p>
							<a class="twitter-timeline" href="https://twitter.com/CarolCherotich" width="300"
  height="300" data-widget-id="656166267464871936">Tweets by @CarolCherotich</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


							<script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>

							<script src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=carolcherotich&include_rts=true&count=10&callback=twitterCallback2"

								type="text/javascript"></script>

							<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=carolcherotich&show_count=true&lang=en"

								style="height: 20px; text-align: right;"></iframe>
							</p>
						</div>				
						<div class="widget meta-social column three">
							<h4>Follow Me</h4>
							<ul class="inline">
								<li><a target="_blank" href="https://twitter.com/carolcherotich" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/pub/caroline-cherotich/32/641/70b" class="facebook-share border-box"><i class="fa fa-linkedin fa-lg"></i></a></li>
								<li><a target="_blank" href="https://plus.google.com/115815386101223599926/posts" class="pinterest-share border-box"><i class="fa fa-google-plus fa-lg"></i></a></li>
							</ul>
						</div>														
					</section><!-- top-footer -->
					<section id="bottom-footer">
						<p class="keep-left">&copy; 2015 Caroline Cherotich</a>. All Rights Reserved.</p>
						<p class="keep-right">Design by <a href="http://www.wesongaeric.com" target="_blank">Jayriq</a>.</p>
					</section><!-- bottom-footer -->			
				</div><!-- row-content -->	
			</div><!-- row -->	
		</footer>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>	
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES * * */
			var disqus_shortname = 'talktocaroline';
			
			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function () {
				var s = document.createElement('script'); s.async = true;
				s.type = 'text/javascript';
				s.src = '//' + disqus_shortname + '.disqus.com/count.js';
				(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
			}());
		</script>
	</body>

</html>
