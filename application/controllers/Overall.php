<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'Main_Controller.php';

class Overall extends Main_Controller {

	public function initK()
	{
		$this->data['currentPageID'] = 'overall_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Overall Winning';
		$this->data['current']= 'overall';

		$this->data['dbBlogTitle'][0] = 'Overall Title';
		$this->data['dbStoryShort'][0] = 'Overall The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd.asdf.asd.fa.sf. a.sdf.asdf .asdf . Yeeeehawwwww. :-) ';
		$this->data['dbStoryLong'][0] = 'Overall I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-) I can tell you how, its really fun! The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd. Yeeeehawwwww. :-)';
		$this->data['dbWriter'][0] = 'Kevin McCoy';
		$this->data['dbWriterDate'][0] = '01/12/2014';
	}

	public function index()
	{
		$this->initK();

		$this->load->model('Blog_model');
		$this->load->view('blogs_view', $this->data);
	}

	public function overallStory(){
		$this->initK();

		$this->load->view('story_view', $this->data);
	}


}/* [END] class Overall extends Main_Controller */
