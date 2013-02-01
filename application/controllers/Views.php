<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Views extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private $data;

	public function __construct() {
		/* ## Get URI and store it in the data ## */
		$rURI=$_SERVER['REQUEST_URI'];
		$this->data['currentPage'] = substr($rURI, strrpos($rURI, '/') + 1);
		$rURI = NULL;

		/* ## Set the class name and Title to display in html ## */
		/* ## This is using the last uri name ## */

		$crPapge = NULL;
		$crPage = $this->data['currentPage'];
		if(!$crPage || $crPage == "landing" || $crPage == "Views" || $crPage == "index.php") $this->landingSetup();
		else if($crPage == "slalomBlogs" 	|| $crPage == "slalomStory") $this->slalomSetup();
		else if($crPage == "trickBlogs" 	|| $crPage == "trickStory") $this->trickSetup();
		else if($crPage == "jumpBlogs" 		|| $crPage == "jumpStory") $this->jumpSetup();
		else if($crPage == "overallBlogs" 	|| $crPage == "overallStory") $this->overallSetup();
		else if($crPage == "about3Event") $this->aboutSetup();
		else $this->errorSetup();
		$currentPage = NULL;

		// var_dump(this->data['currentPageClass']);
		parent::__construct();
		$this->load->view('inc/open_html_inc', $this->data);
		$this->load->view('inc/navigation_public_inc', $this->data);
 
 		/* TEMPORY SetUp Blank to clear any errors Testing NuLLy */
		$this->data['dbWriter'][0] = 'NuLLy dbWriter';
		$this->data['dbWriterDate'][0] = 'NuLLy dbWriterDate';
		$this->data['dbBlogTitle'][0] = 'NuLLy dbBlogTitle';
		$this->data['dbStoryShort'][0] = 'NuLLy dbStoryShort';
		$this->data['dbStoryLong'][0] = 'NuLLy dbStory Long Basasdfasdf asdfasdf asdfasdf asdfasdf asdfasdfasdf asdf';

		$this->data['dbWriter'][1] = 'NuLLy dbWriter';
		$this->data['dbWriterDate'][1] = 'NuLLy dbWriterDate';
		$this->data['dbBlogTitle'][1] = 'NuLLy dbBlogTitle';
		$this->data['dbStoryShort'][1] = 'NuLLy dbStoryShort';
		$this->data['dbStoryLong'][1] = 'NuLLy dbStory Long Basasdfasdf asdfasdf asdfasdf asdfasdf asdfasdfasdf asdf';
    }

/* ####	PRE parent::__construct();  #### */
    public function landingSetup(){
		$this->data['currentPageID'] = 'landing_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Three Event Waterskiing';
		$this->data['current']= 'landing';

    }
    public function aboutSetup(){
		$this->data['currentPageID'] = 'aboutThreeEvent_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'About Three Event Waterskiing';
		$this->data['current']= 'about';
    }
	public function slalomSetup(){
		$this->data['currentPageID'] = 'slalom_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Slalom Ski';
		$this->data['current']= 'slalom';
	}
	public function trickSetup() {
		$this->data['currentPageID'] = 'trick_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Trick Ski';
		$this->data['current']= 'trick';
	}
	public function jumpSetup() {
		$this->data['currentPageID'] = 'jump_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Jump Ski';
		$this->data['current']= 'jump';
	}
	public function overallSetup() {
		$this->data['currentPageID'] = 'overall_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Overall Winning';
		$this->data['current']= 'overall';
	}
	public function errorSetup(){
		$this->data['currentPageID'] = 'unknown_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'unknown error controller/Views.php line 34::';
		$this->data['current']= 'unknown';
	}
/* ####	[END] - PRE parent::__construct();  #### */


/* ####	POST parent::__construct();  #### */
	public function index() {
    	//TODO:: Make 404 for robots
		$this->landing();
    }

    /* Home Page is the landing */
	public function landing(){
		//REPEAT:: $data need to be carried to here from line 22;
		$this->load->view('landing_view', $this->data);
		$this->theEnd();
	}


	public function slalomBlogs(){
		$this->data['dbBlogTitle'][0] = 'Slalom ski title';
		$this->data['dbStoryShort'][0] = 'The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd.asdf.asd.fa.sf. a.sdf.asdf .asdf . Yeeeehawwwww. :-) ';
		$this->data['dbWriter'][0] = 'Kevin McCoy';
		$this->data['dbWriterDate'][0] = '01/12/2014';

		$this->load->view('blogs_view', $this->data);
		$this->theEnd();
	}
	public function slalomStory(){
		$this->load->view('story_view', $this->data);
		$this->theEnd();
	}


	public function trickBlogs(){
		$this->data['dbBlogTitle'][0] = 'trick ski title';
		$this->data['dbStoryShort'][0] = 'The short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd.asdf.asd.fa.sf. a.sdf.asdf .asdf . Yeeeehawwwww. :-) ';
		$this->data['dbWriter'][0] = 'Kevin McCoy';
		$this->data['dbWriterDate'][0] = '01/12/2014';

		$this->data['dbBlogTitle'][1] = 'Tile Number Two';
		$this->data['dbStoryShort'][1] = 'The 2 short story load here about about the big stroy iwll contueinte toe rhead adsflkadsf. asdfajsdflkjfd.asdf.asd.fa.sf. a.sdf.asdf .asdf . Yeeeehawwwww. :-) ';
		$this->data['dbWriter'][1] = 'Kevin Two';
		$this->data['dbWriterDate'][1] = '01/12/2012';


		$this->load->view('blogs_view', $this->data);
		$this->theEnd();
	}
	public function trickStory(){
		$this->load->view('story_view', $this->data);
		$this->theEnd();
	}


	public function jumpBlogs(){
		$this->data['dbWriter'][0] = 'dbWriter';
		$this->data['dbWriterDate'][0] = '1234';
		$this->data['dbBlogTitle'] = 'dbBlogTitle';
		$this->data['dbStoryShort'][0] = 'NuLLy dbStoryShort';
		$this->data['dbStoryLong'][0] = 'NuLLy dbStory Long Basasdfasdf asdfasdf asdfasdf asdfasdf asdfasdfasdf asdf';

		$this->data['dbWriter'][1] = 'NuLLy dbWriter';
		$this->data['dbWriterDate'][1] = 'NuLLy dbWriterDate';
		$this->data['dbBlogTitle'][1] = 'NuLLy dbBlogTitle';
		$this->data['dbStoryShort'][1] = 'NuLLy dbStoryShort';
		$this->data['dbStoryLong'][1] = 'NuLLy dbStory Long Basasdfasdf asdfasdf asdfasdf asdfasdf asdfasdfasdf asdf';



		$this->load->view('blogs_view', $this->data);
		$this->theEnd();
	}
	public function jumpStory(){
		$this->load->view('story_view', $this->data);
		$this->theEnd();
	}


	public function overallBlogs(){
		$this->load->view('blogs_view', $this->data);
		$this->theEnd();
	}
	public function overallStory(){
		$this->load->view('Story_view', $this->data);
		$this->theEnd();
	}


	public function about3Event(){
		$this->load->view('about_view', $this->data);
		$this->theEnd();
	}

	/* WORK IN PROGRESS (WIP) */
	public function wip(){
		$this->load->view('wip.html');
		$this->theEnd();
	}

	/* Load the footer at the end of the page */
	public function theEnd(){
		$this->load->view('inc/footer_inc');
		// $this->load->view('inc/feedback_inc');
		$this->load->view('inc/close_html_inc', $this->data);
	}

}

/* ####	[END] - POST parent::__construct();  #### */
/* End of file Views.php */
/* Location: ./application/controllers/Views.php */
