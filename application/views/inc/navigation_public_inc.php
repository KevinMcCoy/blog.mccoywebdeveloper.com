
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
	<div id="<?= $currentPageID ?>" class="wrapper clearfix">

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
				<a href="<?= base_url('/') ?>"><h1 class="logo">3-Event Water Ski Blogs</h1></a>
				<!-- ### Navigation Bar to the four Main Blog pages -->
				<ul id="nav">
					<li><?php if($currentPageID == 'slalom_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('slalom') ?>">Slalom</a></li>
					<li><?php if($currentPageID == 'trick_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('trick') ?>">Trick</a></li>
					<li><?php if($currentPageID == 'jump_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('jump') ?>">Jump</a></li>
					<li><?php if($currentPageID == 'overall_page') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('overall') ?>">Overall</a></li>
				</ul>
			</div><!-- [END] #nav_wrapper -->
			<div class="clear"></div>

			<?php 	if($currentPageID == 'landing_page') $this->load->view('inc/intro_01_inc.php');
					// elseif ($currentPageID == 'slalom_page' || $currentPageID == 'trick_page' || $currentPageID == 'jump_page' || $currentPageID == 'overall_page') $this->load->view('inc/intro_02_inc.php');
			 ?>


		</div><!-- [END] #header .public -->
		<div class="clear"></div>
<!-- [END] views/inc/navigation_public_inc.php -->
