<!-- Created on Jan 15, 2013 by Kevin McCoy -->
<!-- [Start] views/landing_view.php -->

<!-- Hidden This is were you can add a center in another development stage IDEA:: -->
<div id="center" style="display:none; visibility:hidden;">
	<h3>Slalom</h3>
</div>

<ul class="blogsShort">
	<li>
		<a href="<?= base_url('index.php/Views/slalomStory') ?>">
			<img src="<?= base_url('inc/img/slalom_landing.png') ?>" alt="Slalom Skiier just before dusk" />
			<h3>Slalom Ski Title One</h3>
		</a>
		<div class="social">
			<h4>Kevin McCoy 01/02/2013</h4>
			<!-- Google +1 button -->
			<span class="googleplus">
				<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200"></div>
			</span>
			<!-- Facebook like button -->
			<span class="facebook">
				<div class="fb-like" data-send="true" data-layout="button_count" data-width="100" data-show-faces="true"></div>
			</span>
		</div>
		<p>Slalom skiing is on only one ski with two footplates.  Once the skier can ski crossing the boat's wake, the skier can then start going around six buoys in a ski course. The boat’s top speed is 36 MPHs.</p>
	</li>

	<hr class="style_two" />
	<li>
		<a href="<?= base_url('index.php/Views/slalomStory') ?>">
			<img src="<?= base_url('inc/img/slalom_landing.png') ?>" alt="Slalom Skiier just before dusk" />
			<h3>Slalom Ski Title Two</h3>
		</a>
		<h4>Kevin McCoy 01/02/2013</h4>
		<p>Slalom skiing is on only one ski with two footplates.  Once the skier can ski crossing the boat's wake, the skier can then start going around six buoys in a ski course. The boat’s top speed is 36 MPHs.</p>
	</li>
	<hr class="style_two" />
	<li>
		<!-- <div id="invoice">Image Slice 1</div> -->
		<img src="<?= base_url('inc/img/slalom_landing.png') ?>" alt="Slalom Skiier just before dusk" />
		<h3>Slalom Ski Title Three</h3>
		<h4>Kevin McCoy 01/02/2013</h4>
		<p>Slalom skiing is on only one ski with two footplates.  Once the skier can ski crossing the boat's wake, the skier can then start going around six buoys in a ski course. The boat’s top speed is 36 MPHs.</p>
	</li>
</ul><!--[END]#slalomBlog-->

<a class="landingBTN" href="<?= base_url('register') ?>">Click to be part of the Water Ski Community</a>

<!-- [End] of file views/landing_view.php -->

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- Location: .../application/views/landing_views.php -->
