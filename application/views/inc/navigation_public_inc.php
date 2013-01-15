
<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->

	
	<div id="<?php if($currentPage == "index.php") echo 'landing_page';
					else if($currentPage == "register") echo 'register_page';
					else echo $currentPage . '_page'; ?>" class="wrapper clearfix">

		<div id="header-public">
			<!-- LOGO -->
			<a href="<?= base_url('index.php/') ?>"><h2 class="logo">McCoy Developer</h2></a>
			
			<!-- Login -->
			<!-- NOTES::  Ed says not to have login for current scope of the project -->
			<!-- <div class="login">
				<form id="login" action="Members/login" method="POST">
					<input type="text" name="email" placeholder="email" class="zip login">
					<input type="password" name="password" placeholder="password" class="zip login">
						<! <a href="Members/login" class="login_btn">Log in</a> !>
					<input id="loginBTN" class="login login_btn" type="submit" value="Log in">
				</form>
			</div> -->
		</div><!-- [END] #header-public -->
