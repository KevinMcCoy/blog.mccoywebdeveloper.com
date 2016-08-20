<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

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

		/* ## curentPage is using the last uri name ## */
		// $crPapge = NULL;
		// $crPage = $this->data['currentPage'];

		parent::__construct();

	}/* [END] fn __construct() */


	function initializeView($data){
		$this->load->view('inc/open_html_inc', $data);
		$this->load->view('inc/navigation_public_inc', $data);
	}


	public function index() {
		$this->landing();
	}

	/* Home Page is the landing */
	public function landing(){
		$this->data['currentPageID'] = 'landing_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Three Event Waterskiing';
		$this->data['current']= 'landing';

		$this->initializeView($this->data);
		$this->load->view('landing_view', $this->data);
	}


	function __destruct() {
		$this->load->view('inc/footer_inc');
		// $this->load->view('inc/feedback_inc');
		$this->load->view('inc/close_html_inc', $this->data);
	}

}// [END] class Main_Controller extends CI_Controller
