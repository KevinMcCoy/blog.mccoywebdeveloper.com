
<!-- [START] views/inc/navigation_public_inc.php -->
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->

	<!--**  I am using this id to lable page 
		**	I can use this with jQuery insted of using the url.
		**  This way is more flexable  [END]-->
	<div id="<?php echo $currentPageID ?>" class="wrapper clearfix">

		<div id="header" class="public">
			<!-- ### Login -->
			<!-- TEMPORY:: NOTES::  Ed says not to have login for current scope of the project -->
			<!-- <div class="login">
				<form id="login" action="Members/login" method="POST">
					<input type="text" name="email" placeholder="email" class="zip login">
					<input type="password" name="password" placeholder="password" class="zip login">
						<! <a href="Members/login" class="login_btn">Log in</a> !>
					<input id="loginBTN" class="login login_btn" type="submit" value="Log in">
				</form>
			</div> -->

			<!-- Logo and Navigation is contained in this div -->
			<div id="nav_wrapper">
				<!-- ### LOGO/Title of site/ Escape hatch ## -->
				<a href="<?= base_url('index.php/Views') ?>"><h1 class="logo">3-Event Water Ski Blogs</h1></a>
				<!-- ### Navigation Bar to the four Main Blog pages -->
				<ul id="nav">
					<li><?php if($currentPageID == 'slalom_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/slalomBlogs') ?>">Slalom</a></li>
					<li><?php if($currentPageID == 'trick_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/trickBlogs') ?>">Trick</a></li>
					<li><?php if($currentPageID == 'jump_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/jumpBlogs') ?>">Jump</a></li>
					<li><?php if($currentPageID == 'overall_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/overallBlogs') ?>">Overall</a></li>
				</ul>
			</div><!-- [END] #nav_wrapper -->
			<div id="shortIntro">
				<p><span class="quotes left">"</span>Hello and welcome to the water ski community web site. Here you will find interesting topic base on Three Event Water Skiing.  If you never heard of this sport, you can read what Three Event Water Skiing is all about.<span class="quotes right">"</span></p>
				<!-- a href - Learn about 3-Event -->
				<a class="learnAboutThreeEvent" href="<?= base_url('index.php/Views/about3Event') ?>">Learn about <?= $currentTitle ?></a>
			</div><!-- [END] #shortIntro -->

		</div><!-- [END] #header .public -->
		<div class="clear"></div>
<!-- [END] views/inc/navigation_public_inc.php -->
