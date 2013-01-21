
<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	<div id="<?php if($currentPage == "landing") echo 'landing_page';
					else if($currentPage == "slalomMain") echo 'slalom_page';
					else if($currentPage == "trickMain") echo 'trick_page';
					else if($currentPage == "jumpMain") echo 'jump_page';
					else if($currentPage == "overallMain") echo 'overall_page';
					else echo $currentPage . '_page'; ?>" class="wrapper clearfix">

		<div id="header" class="public">
			<div id="nav_wrapper">
			<!-- ### LOGO -->
			<h1 class="logo"><a href="<?= base_url('index.php/') ?>">McCoy Developer</a></h1>
				<!-- ### Navigation Bar to the four Main Blog pages -->
					<ul id="nav">
						<?php if($currentPage == 'slalomMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/slalomMain') ?>">Slalom</a></li>
						<?php if($currentPage == 'trickMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/trickMain') ?>">Trick</a></li>
						<?php if($currentPage == 'jumpMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/jumpMain') ?>">Jump</a></li>
						<?php if($currentPage == 'overallMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/overallMain') ?>">Overall</a></li>
					</ul>
			</div>
			
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

			<a href="<?= base_url('index.php/Views/about') ?>"><h2>3-Event Water Skiing</h2></a>

		</div><!-- [END] #header-public -->
