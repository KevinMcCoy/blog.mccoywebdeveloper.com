<!-- [Start] views/slalomStory_view.php -->
<!-- Jan 21, 2013 Created on by Kevin McCoy -->
<!-- Jan 30, 2013 Rename for sever side -->

<!-- Hidden This is were you can add a center in another development stage IDEA:: -->
<div id="center" style="display:none; visibility:hidden;">
	<h3>Slalom</h3>
</div>

<div class='left'>
	<ul id="story">
		<!-- TODO::  Change class and ID names here as well in the the java script file soon to be added. -->
		<li itemscope itemtype="www.McCoyWebDeveloper.com/" >
			<h3><?= $dbBlogTitle[0] ?></h3>
			<a class="text" href="<?= base_url('index.php/Views/'.$current.'Blogs') ?>">Back to <?= $current ?> Blogs list</a>
			<div class="social wide">
				<h4><?= $dbWriter[0].' '.$dbWriterDate[0] ?></h4>
				<!-- Facebook like button -->
				<div class="facebook">
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
				</div>
				<!-- Google +1 button -->
				<div class="googleplus">
					<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="200"></div>
				</div>
			</div>
			<img src="<?= base_url('inc/img/story/slalom_001.jpg')?>" width="730" height="560" alt="Skiier just before dusk" />
			<p itemprop="description"><?= $dbStoryLong[0] ?></p>
		</li>
	</ul><!--[END]#slalomBlog-->
</div>
<div class='right'>
	<!-- TODO:: Add stuff into this -->
</div>
<div class="clear"></div>


<!-- [End] of file views/landing_view.php -->
<!-- Location: .../application/views/slalomStory_view.php -->
