
<!-- [Start] views/landing_view.php -->
<!-- Jan 15, 2013 Created on by Kevin McCoy -->
<!-- Jan 30, 2013 Rename for sever side -->


<!-- Hidden This is were you can add a center in another development stage IDEA:: -->
<div id="center" style="display:none; visibility:hidden;">
	<!-- <h3> h3title for SEO </h3> -->
</div>

	<div class='left'>
	<ul class="blogsShort">
		<!-- itemscope itemtype is for google + button to grab the data using jQuery - Validation error says: Line 106, Column 55: Bad value www.McCoyWebDeveloper.com/ for attribute itemtype on element li: Not an absolute IRI. -->
		<!-- Data base load first for this list to load -->
		<li itemscope itemtype="www.McCoyWebDeveloper.com/" >
<!-- TODO:: Add current story number after story name ... -->
			<a href="<?= base_url('index.php/Views/'.$current.'Story') ?>">
				<img itemprop="image" src="<?= base_url('inc/img/landing/slalom_003.jpg') ?>" width="200" height="160" alt="Slalom Skiier just before dusk" />
				<h3 itemprop="name"><?= $dbBlogTitle[0] ?></h3>
			</a>
			<div class="social">
				<h4><?= $dbWriter[0].' '.$dbWriterDate[0] ?></h4>
				<!-- Facebook like button -->
				<div class="facebook">
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
				</div>
				<!-- Google +1 button -->
				<div class="googleplus">
					<!-- <div class="g-plus" data-action="share"></div> -->
 					<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200"></div>
 				</div>
			</div>
			<p itemprop="description"><?= $dbStoryShort[0] ?></p>
<!-- TODO::  URL NUMBERS -->			
			<a class="text" href="<?= base_url('index.php/Views/slalomStory') ?>">Continue reading story...</a>
		</li>

<!-- LOOP TESTING Remove below later on -->
		<li itemscope itemtype="www.McCoyWebDeveloper.com/" >
<!-- TODO:: Add current story number after story name ... -->
			<a href="<?= base_url('index.php/Views/'.$current.'Story') ?>">
				<img itemprop="image" src="<?= base_url('inc/img/landing/slalom_003.jpg') ?>" width="200" height="160" alt="Slalom Skiier just before dusk" />
				<h3 itemprop="name"><?= $dbBlogTitle[1] ?></h3>
			</a>
			<div class="social">
				<h4><?= $dbWriter[1].' '.$dbWriterDate[1] ?></h4>
				<!-- Facebook like button -->
				<div class="facebook">
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
				</div>
				<!-- Google +1 button -->
				<div class="googleplus">
					<!-- <div class="g-plus" data-action="share"></div> -->
 					<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200"></div>
 				</div>
			</div>
			<p itemprop="description"><?= $dbStoryShort[1] ?></p>
<!-- TODO::  URL NUMBERS -->			
			<a class="text" href="<?= base_url('index.php/Views/slalomStory') ?>">Continue reading story...</a>
		</li>

		<li itemscope itemtype="www.McCoyWebDeveloper.com/" >
			<a href="<?= base_url('index.php/Views/slalomStory') ?>">
				<img itemprop="image" src="<?= base_url('inc/img/landing/slalom_002.jpg') ?>" width="200" height="160" alt="Slalom Skiier just before dusk" />
				<h3 temprop="name">Do you know how to ski?</h3>
			</a>
			<div class="social">
				<h4>John Parks 01/02/2013</h4>
				<!-- Facebook like button -->
				<div class="facebook">
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
				</div>
				<!-- Google +1 button -->
				<div class="googleplus">
					<!-- <div class="g-plus" data-action="share"></div> -->
 					<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200"></div>
 				</div>
			</div>
			<p>Yeeeeehawwwwwww. It is fun to jump on a slalom ski. Once I cross the boat's wake, the skier can then start going around six buoys in a ski course. The boat’s top speed is 36 MPHs.</p>
			<a class="text" href="<?= base_url('index.php/Views/slalomStory') ?>">Continue reading story...</a>
		</li>
	</ul><!--[END]#slalomBlog-->
</div>
<div class="right"></div>

<div class="clear"></div>
<!-- [End] of file views/landing_view.php -->
<!-- Location: .../application/views/landing_views.php -->
