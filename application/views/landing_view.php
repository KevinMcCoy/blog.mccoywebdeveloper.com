<!-- Created on Jan 15, 2013 by Kevin McCoy -->
<!-- [Start] views/landing_view.php -->
<!-- <div id="nav_wrapper">
	- ### Navigation Bar to the four Main Blog pages -
	<ul id="nav">
		<?php if($currentPage == 'slalomMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/slalomMain') ?>">Slalom</a></li>
		<?php if($currentPage == 'trickMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/trickMain') ?>">Trick</a></li>
		<?php if($currentPage == 'jumpMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/jumpMain') ?>">Jump</a></li>
		<?php if($currentPage == 'overallMain') echo '<li class="current">'; else echo '<li>' ?><a href="<?= base_url('index.php/Views/overallMain') ?>">Overall</a></li>
	</ul>
</div> -->

	<ul id="siteInfo">
		<li class="slalom">
			<a href="<?= base_url('index.php/Views/slalomMain') ?>">
				<h4>Slalom Ski</h4>
				<img src="<?= base_url('inc/img/slalom_landing.png') ?>" alt="Slalom Skiier just before dusk" width="200" height="200" />
				<p>Goal to go around six buoys in a ski course. The boat’s top speed is 36 MPHs.</p>
			</a>
		</li>
		<li class="trick">
			<a href="<?= base_url('index.php/Views/wip') ?>">
				<h4>Trick Ski</h4>
				<img src="<?= base_url('inc/img/trick_landing.jpg') ?>" alt="Trick Skiier doing a flip" width="200" height="200" />
				<p>The skier has a time limit to perform tricks that are worth points.  The boat speed varies any were from 12 to 24 MPHs.</p>
			</a>
		</li>
		<li class="jump">
			<a href="<?= base_url('index.php/Views/wip') ?>">
				<h4>Jump Ski</h4>
				<img src="<?= base_url('inc/img/jump_landing.png') ?>" alt="Jump Skiier flying in the sky" width="200" height="200" />
				<p>Skier gose over a five to six feet fiberglass ramp. The boat’s top speed is 45MPHs. The world record holder in jump skiing flew over 300 feet in the air.</p>
			</a>
		</li>
		<li class="overall">
			<a href="<?= base_url('index.php/Views/wip') ?>">
				<h4>Overall 3-Event</h4>
				<img src="<?= base_url('inc/img/overall_landing.png') ?>" alt="Overall Winners" width="200" height="200" />
				<p>Scoring works is it adds slalom, trick, and jump scores together.  The combined score will show who wins in the Three Event.</p>
			</a>
		</li>
	</ul><!--[END]#siteInfo-->

<span class="clearBoth"><a class="landingBTN" target="_blank" href="https://plus.google.com/u/0/communities/106457987016584993268">Check out Water Ski Community at Google +</a></span>

<!-- [End] of file views/landing_view.php -->
<!-- Location: .../application/views/landing_views.php -->
