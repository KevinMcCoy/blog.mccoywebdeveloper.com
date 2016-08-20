<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'BaseController.php';

class About3Event extends BaseController {

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


}/* [END] class About3Event extends BaseController */
