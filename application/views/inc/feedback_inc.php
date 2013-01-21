
</div><!-- end of current page this div open tag is located at .../views/inc/navigation_public_inc.php -->

<!-- User Testing Feedback -->
<!-- .../views/inc/feeback.html -->
<!-- Created on Jan 15, 2013 by Kevin McCoy -->
<!-- admin email: kevinmccoy@earthlink.net -->

<div id="user_testing">

	<p>Hello, this site is in alpha stage.  Alpha stage is where we start usability testing.  That means, we need you to tell us what you think about this site.  What part of this page of the site did you dislike or like and/or didn't understand.  Are there anything you think is missing or would like to have on this page above the line?</p>
	<p>This testing period will last from Jan 16, 2012 to February 16, 2013</p>

	<form id="userfeedback" action="feedback/submit" method="POST" autocomplete="off">
		<fieldset>
			<legend>User Feed Back Questions</legend>
			<ol>
				<li>
					<label for="fb_question_1">What you think of the Navagation bar at the top of the page?</label>
					<textarea id="fb_question_1" name="fb_question_1"></textarea>
				</li>
				<li>
					<label for="fb_question_2">The contents that are displayed, after clicking on edit there a form, what you think of these two things?</label>
					<textarea id="fb_question_2" name="fb_question_2"></textarea>
				</li>
				<li>
					<label for="fb_question_3">What you think of the buttons, and placement of the buttons, any other buttons you would like to have?</label>
					<textarea id="fb_question_3" name="fb_question_3"></textarea>
				</li>
				<li>
					<label for="fb_question_4">What you think of the animation/changes as you use this page?</label>
					<textarea id="fb_question_4" name="fb_question_4"></textarea>
				</li>
				<li>
					<label for="fb_question_5">Take a step back, thinking about the overall feel of this page, colors, layout, placement, and from the feel of the site what dose it reminds you of ?</label>
					<textarea id="fb_question_5" name="fb_question_5"></textarea>
				</li>
			</ol>
		</fieldset>
		<fieldset>
			<legend>Would you like to be contacted when the site gose live?</legend>
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

	<p id="thankyou">Thankyou for your time checking out our site.  Your usability testing and feedback will be greatly appreciated.</p>

</div><!-- [END] #user_testing -->
