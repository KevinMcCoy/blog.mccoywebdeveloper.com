
</div><!-- end of current page this div open tag is located at .../views/inc/navigation_public_inc.php -->

<!-- User Testing Feedback -->
<!-- .../views/inc/feeback.html -->
<!-- Created on Jan 15, 2013 by Kevin McCoy -->
<!-- admin email: kevinmccoy@earthlink.net -->

<div id="user_testing">

	<p>Hello this site is in alpha stage.  Alpha stage is where we start usability testing.  That means we need you to tell us what your feedback for this web page.  Is there anything on this page you dislike, like, and/or don'tunderstand?  Is there anything you think is missing or would like to add?</p>
	<p>This testing period will last from Jan 16, 2012 to February 16, 2013</p>

	<form id="userfeedback" action="feedback/submit" method="POST" autocomplete="off">
		<fieldset>
			<legend>User Feedback Questions</legend>
			<ol>
				<li>
					<label for="fb_question_1">Can you easily read and use the Navigation at the top right of the page? Any suggestions?</label>
					<textarea id="fb_question_1" name="fb_question_1"></textarea>
				</li>
				<li>
					<label for="fb_question_2">What do you think of the layout and or buttons; the placement, color, and readability?</label>
					<textarea id="fb_question_3" name="fb_question_3"></textarea>
				</li>
				<li>
					<label for="fb_question_3">What do you think of the animation/changes as you use this page?</label>
					<textarea id="fb_question_4" name="fb_question_4"></textarea>
				</li>
				<li>
					<label for="fb_question_4">Take a step back, and think about the overall feel of this page; the colors, layout, placement. Dose it remindyou of anything and or how do you feal?</label>
					<textarea id="fb_question_5" name="fb_question_5"></textarea>
				</li>
			</ol>
		</fieldset>
		<fieldset>
			<legend>Would you like to be contacted when the site goes live?</legend>
				<ol id="feedback_touchbase">
					<li>
						<label for="feedback_name">Name</label>
						<input id="feedback_name" name="feedback_name">
					</li>
					<li>
						<label for="feedback_email">Email</label>
						<input id="feedback_email" name="feedback_email">
					</li>
				</ol>
		</fieldset>
		
		<fieldset style="border:hidden;">
			<input id="userfeedbacksubmit" type="submit">
		</fieldset>
	</form>

	<p id="thankyou">Thank you, your usability testing and feedback will be greatly appreciated.</p>

</div><!-- [END] #user_testing -->
