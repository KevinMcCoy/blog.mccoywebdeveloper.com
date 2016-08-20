<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'Main_Controller.php';

class About3Event extends Main_Controller {

	private $data;

	public function initK()
	{
		$this->data['currentPageID'] = 'aboutThreeEvent_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'About Three Event Waterskiing';
		$this->data['current']= 'about';
	}

	public function index()
	{
		$this->initK();
		$this->load->view('about_view', $this->data);
	}


}/* [END] class About3Event extends Main_Controller */
