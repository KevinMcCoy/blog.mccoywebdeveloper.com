<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'BaseController.php';

class Slalom extends BaseController {

	public function initialData()
	{
		$this->data['currentPageID'] = 'slalom_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Slalom Ski';
		$this->data['current']= 'slalom';

		$this->data['dbBlogTitle'][0] = 'Do you know how to Slalom ski?';
		$this->data['dbStoryShort'][0] = 'I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) ';
		$this->data['dbStoryLong'][0] = 'I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-)';
		$this->data['dbWriter'][0] = 'Kevin McCoy';
		$this->data['dbWriterDate'][0] = '01/12/2014';
	}

	public function index()
	{
		$this->initialData();
		$this->blogsViews($this->data);
	}

	public function slalomStory(){
		$this->initialData();
		$this->storyViews($this->data);
	}

}/* [END] class Slalom extends BaseController */
