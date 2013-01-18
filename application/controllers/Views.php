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
	public function __construct() {
        parent::__construct();
		$data['currentPage'] = 'landing';
		$this->load->view('inc/open_html_inc', $data);
		$this->load->view('inc/navigation_public_inc', $data);
    }

    public function index() {
    }

	public function landing(){
		//REPEAT:: $data need to be carried to here from line 22;
		$data['currentPage'] = 'landing';
		$this->load->view('landing_view');
		$this->theEnd($data);
	}

	public function slalomMain(){
		$data['currentPage'] = 'slalomMain';
		$this->load->view('slalomBlogs_view');
		$this->theEnd($data);
	}

	public function trickMain(){
		$data['currentPage'] = 'trickMain';
		$this->load->view('trickBlogs_view');
		$this->theEnd($data);
	}

	public function jumpMain(){
		$data['currentPage'] = 'jumpMain';
		$this->load->view('jumpBlogs_view');
		$this->theEnd($data);
	}

	public function overallMain(){
		$data['currentPage'] = 'overallMain';
		$this->load->view('overallBlogs_view');
		$this->theEnd($data);
	}

	public function about(){
		$data['currentPage'] = 'slalomMain';
		$this->load->view('about_view');
		$this->theEnd($data);
	}


	public function theEnd($data){
		$this->load->view('inc/footer_inc');
		$this->load->view('inc/feedback_inc');
		$this->load->view('inc/close_html_inc', $data);
	}

}

/* End of file Views.php */
/* Location: ./application/controllers/Views.php */