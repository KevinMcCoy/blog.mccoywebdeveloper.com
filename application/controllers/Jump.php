<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'BaseController.php';

class Jump extends BaseController {

	public function initialData()
	{
		$this->data['currentPageID'] = 'jump_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Jump Ski';
		$this->data['current']= 'jump';

		$this->data['dbBlogTitle'][0] = 'Jump dbBlogTitle';
		$this->data['dbStoryShort'][0] = 'Jump The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd.asdf.asd.fa.sf. a.sdf.asdf .asdf . Yeeeehawwwww. :-) ';
		$this->data['dbStoryLong'][0] = 'Jump I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-)';
		$this->data['dbWriter'][0] = 'Kevin McCoy';
		$this->data['dbWriterDate'][0] = '01/12/2014';
	}

	public function index()
	{
		$this->initialData();
		$this->blogsViews($this->data);
	}

	public function jumpStory(){
		$this->initialData();
		$this->storyViews($this->data);
	}


}/* [END] class Jump extends BaseController */
