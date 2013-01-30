
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
	<div id="<?php if($currentPage == "landing") echo 'landing_page';
					else if($currentPage == "slalomBlogs") echo 'slalom_page';
					else if($currentPage == "trickBlogs") echo 'trick_page';
					else if($currentPage == "jumpBlogs") echo 'jump_page';
					else if($currentPage == "overallBlogs") echo 'overall_page';
					else echo $currentPage . '_page'; ?>" class="wrapper clearfix">

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
			<!-- ### LOGO -->
			<a href="<?= base_url('index.php/Views') ?>"><h1 class="logo">3-Event Water Ski Blogs</h1></a>
				<!-- ### Navigation Bar to the four Main Blog pages -->
					<ul id="nav">
						<li><?php if($currentPage == 'slalomBlogs') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/slalomBlogs') ?>">Slalom</a></li>
						<li><?php if($currentPage == 'trickBlogs') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/trickBlogs') ?>">Trick</a></li>
						<li><?php if($currentPage == 'jumpBlogs') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/jumpBlogs') ?>">Jump</a></li>
						<li><?php if($currentPage == 'overallBlogs') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/overallBlogs') ?>">Overall</a></li>
					</ul>
			</div><!-- [END] #nav_wrapper -->
			
			<p><a class="continueReadingStory" href="<?= base_url('index.php/Views/slalomStory') ?>">Learn about <?= $currentPage ?></a><p>
			<p>Hello I am going to tell you what this page is aboug so you don't leave right way.  Click on an image you fool!</p>

		</div><!-- [END] #header-public -->
<!-- [END] views/inc/navigation_public_inc.php -->
