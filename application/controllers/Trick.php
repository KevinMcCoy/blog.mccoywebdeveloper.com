<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'BaseController.php';

class Trick extends BaseController {

	public function initialData()
	{
		$this->data['currentPageID'] = 'trick_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Trick Ski';
		$this->data['current']= 'trick';

		$this->data['dbBlogTitle'][0] = 'trick ski title';
		$this->data['dbStoryShort'][0] = 'The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd.asdf.asd.fa.sf. a.sdf.asdf .asdf . Yeeeehawwwww. :-) ';
		$this->data['dbStoryLong'][0] = 'I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-)';
		$this->data['dbWriter'][0] = 'Kevin McCoy';
		$this->data['dbWriterDate'][0] = '01/12/2014';
	}

	public function index()
	{
		$this->initialData();
		$this->blogsViews($this->data);
	}

	public function trickStory(){
		$this->initialData();
		$this->storyViews($this->data);
	}


}/* [END] class Trick extends BaseController */
