<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'BaseController.php';

class Category extends BaseController {

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


}/* [END] class Category extends BaseController */
