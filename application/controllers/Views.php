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
		$rURI=$_SERVER['REQUEST_URI'];
		$this->data['currentPage'] = substr($rURI, strrpos($rURI, '/') + 1);
		$rURI=null;
		parent::__construct();
		$this->load->view('inc/open_html_inc', $this->data);
		$this->load->view('inc/navigation_public_inc', $this->data);
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

	public function slalomMain(){
		$this->load->view('slalomBlogs_view');
		$this->theEnd();
	}

	public function trickMain(){
		$this->load->view('trickBlogs_view');
		$this->theEnd();
	}

	public function jumpMain(){
		$this->load->view('jumpBlogs_view');
		$this->theEnd();
	}

	public function overallMain(){
		$this->load->view('overallBlogs_view');
		$this->theEnd();
	}

	public function about(){
		$data['currentPage'] = 'slalomMain';
		$this->load->view('about_view');
		$this->theEnd();
	}
	public function wip(){
		$data['currentPage'] = 'wip';
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