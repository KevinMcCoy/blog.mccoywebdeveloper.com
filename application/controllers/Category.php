<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'Main_Controller.php';

class Category extends Main_Controller {

	private $data;

	public function initK()
	{
		$this->data['currentPageID'] = 'category_page'; /* Could be removed if using current in short */
		$this->data['currentTitle'] = 'Category';
		$this->data['current']= 'category';
	}

	public function index()
	{
		$this->initK();
		$this->load->view('about_view', $this->data);
	}


}/* [END] class Category extends Main_Controller */
