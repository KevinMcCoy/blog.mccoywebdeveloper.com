<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaseController extends CI_Controller {

	private $data;

	public function __construct() {
		/* ## Get URI and store it in the data ## */
		$rURI=$_SERVER['REQUEST_URI'];
		$this->data['currentPage'] = substr($rURI, strrpos($rURI, '/') + 1);
		$rURI = NULL;

		/* ## curentPage is using the last uri name ## */
		// $crPapge = NULL;
		// $crPage = $this->data['currentPage'];

		parent::__construct();

	}/* [END] fn __construct() */


	public function initializeHeadView($data){
		$this->load->view('inc/open_html_inc', $data);
		$this->load->view('inc/navigation_public_inc', $data);
	}


	public function index() {
		//Data
		$this->data['currentPageID'] = 'landing_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Three Event Waterskiing';
		$this->data['current']= 'landing';

		//View
		$this->initializeHeadView($this->data);
		$this->load->view('landing_view', $this->data);
	}

	// Called from other controllers
	public function blogsViews($data) {
		// $this->load->model('Blog_model');
		$this->initializeHeadView($data);
		$this->load->view('blogs_view', $data);
	}
	public function storyViews($data) {
		// $this->load->model('Blog_model');
		$this->initializeHeadView($data);
		$this->load->view('story_view', $data);
	}


	// Load Gloabl Footer View Last
	function __destruct() {
		$this->load->view('inc/footer_inc');
		$this->load->view('inc/close_html_inc', $this->data);

		// move else where -> $this->load->view('inc/feedback_inc');
	}

}// [END] class BaseController extends CI_Controller
