<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'BaseController.php';

class Home extends BaseController {

	public function index() {
		//Data
		$this->data['currentPageID'] = 'landing_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Three Event Waterskiing';
		$this->data['current']= 'landing';

		//View
		$this->initializeHeadView($this->data);

		$this->load->view('landing_view', $this->data);
	}

}// [END] class BaseController extends CI_Controller
