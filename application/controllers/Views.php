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
		if($this->data['currentPage'] == "landing" || $this->data['currentPage'] == "Views" || $this->data['currentPage'] == "index.php") $this->landingSetup();
		else if($this->data['currentPage'] == "about3Event") $this->aboutSetup();
		else if($this->data['currentPage'] == "slalomBlogs" || $this->data['currentPage'] == "slalomStory") $this->slalomSetup();
		else if($this->data['currentPage'] == "trickBlogs" || $this->data['currentPage'] == "trickStory") $this->trickSetup();
		else if($this->data['currentPage'] == "jumpBlogs" || $this->data['currentPage'] == "jumpStory") $this->jumpSetup();
		else if($this->data['currentPage'] == "overallBlogs" || $this->data['currentPage'] == "overallStory") $this->overallSetup();
		else $this->errorSetup();

		// var_dump(this->data['currentPageClass']);
		parent::__construct();
		$this->load->view('inc/open_html_inc', $this->data);
		$this->load->view('inc/navigation_public_inc', $this->data);
    }
    public function landingSetup(){
		$this->data['currentPageID'] = 'landing_page';
		$this->data['currentTitle'] = 'Three Event Waterskiing';
    }
    public function aboutSetup(){
		$this->data['currentPageID'] = 'aboutThreeEvent_page';
		$this->data['currentTitle'] = 'About Three Event Waterskiing';
    }
	public function slalomSetup(){
		$this->data['currentPageID'] = 'slalom_page';
		$this->data['currentTitle'] = 'Slalom Ski';
	}
	public function trickSetup() {
		$this->data['currentPageID'] = 'trick_page';
		$this->data['currentTitle'] = 'Trick Ski';
	}
	public function jumpSetup() {
		$this->data['currentPageID'] = 'jump_page';
		$this->data['currentTitle'] = 'Jump Ski';
	}
	public function overallSetup() {
		$this->data['currentPageID'] = 'overall_page';
		$this->data['currentTitle'] = 'Overall Winning';
	}
	public function errorSetup(){
		$this->data['currentPageID'] = 'unknown_page';
		$this->data['currentTitle'] = 'unknown error controller/Views.php line 34::';
	}

	public function index() {
    	//TODO:: Make 404 for robots
		$this->landing();
    }

	public function landing(){
		//REPEAT:: $data need to be carried to here from line 22;
		$this->load->view('landing_view');
		$this->theEnd();
	}

	public function slalomBlogs(){
		$this->load->view('slalomBlogs_view');
		$this->theEnd();
	}
	public function slalomStory(){
		$this->load->view('slalomStory_view');
		$this->theEnd();
	}

	public function trickBlogs(){
		$this->wip();
	}

	public function jumpBlogs(){
		$this->wip();
	}

	public function overallBlogs(){
		$this->wip();
	}

	public function about3Event(){
		$this->load->view('about_view');
		$this->theEnd();
	}
	public function wip(){
		$this->load->view('wip.html');
		$this->theEnd();
	}

	public function theEnd(){
		$this->load->view('inc/footer_inc');
		// $this->load->view('inc/feedback_inc');
		$this->load->view('inc/close_html_inc', $this->data);
	}

}

/* End of file Views.php */
/* Location: ./application/controllers/Views.php */