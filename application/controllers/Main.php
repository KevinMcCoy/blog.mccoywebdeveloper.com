<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index()
	{
		$data['currentPage'] = 'landing';
		$this->load->view('inc/open_html_inc', $data);
		$this->load->view('inc/navigation_public_inc', $data);
		$this->load->view('landing_view');
		$this->load->view('inc/footer_inc');
		$this->load->view('inc/feedback_inc');
		$this->load->view('inc/close_html_inc', $data);
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */