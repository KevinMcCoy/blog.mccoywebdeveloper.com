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

<a href="<?= base_url('index.php/Views/about') ?>">
	<ul id="siteInfo">
		<li class="slalom">
				<h3>Slalom Ski</h3>
				<img src="<?= base_url('inc/img/slalom_landing.png') ?>" alt="Slalom Skiier just before dusk" width="200px" height="200px" />
				<p>Slalom skiing is on only one ski with two footplates.  Once the skier can ski crossing the boat's wake, the skier can then start going around six buoys in a ski course. The boat’s top speed is 36 MPHs.</p>
		</li>
		<li class="trick">
				<h3>Trick Ski</h3>
				<img src="<?= base_url('inc/img/trick_landing.jpg') ?>" alt="Trick Skiier doing a flip" width="200px" height="200px" />
				<p>Trick skiing is on one much smaller ski and the footplates are set differently than a slalom ski.  The skier has a time limit to perform tricks that are worth points.  The boat speed varies on the rider’s preference; usually any were from 12 to 24 MPHs.</p>
		</li>
		<li class="jump">
				<h3>Jump Ski</h3>
				<img src="<?= base_url('inc/img/jump_landing.png') ?>" alt="Jump Skiier flying in the sky" width="200px" height="200px" />
				<p>Jump skiing is where the skier skis on two skis. They are larger, longer, and wider than a slalom ski.  The skier swings from one side to the other, crossing the boat’s wake. A pro skier can travel to a speed up to 90MPHs just before hitting a 5-6 feet fiberglass ramp. It can be hard to believe that the boat’s top speed is 45MPHs. The world record holder in jump skiing flew over 300 feet in the air.</p>
		</li>
		<li class="overall">
				<h3>Overall 3-Event</h3>
				<img src="<?= base_url('inc/img/overall_landing.png') ?>" alt="Overall Winners" width="200px" height="200px" />
				<p>The meaning of the term Overall is a scoring system.  The way this scoring works is it adds slalom, trick, and jump scores together.  The combined score will show who wins in the Three Event.  Overall scores are figured out at every official tournament that qualifies a contender for all three events.</p>
		</li>
	</ul><!--[END]#siteInfo-->
</a>


<span class="clearBoth"><a class="landingBTN" target="_blank" href="https://plus.google.com/u/0/communities/106457987016584993268">Check out Water Ski Community at Google +</a></span>

<!-- [End] of file views/landing_view.php -->
<!-- Location: .../application/views/landing_views.php -->
