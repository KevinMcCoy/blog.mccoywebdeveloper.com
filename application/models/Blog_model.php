<?php

class Blog_model extends CI_Model {

	public $dbWriter;
	public $dbWriterDate;
	public $dbBlogTitle;
	public $dbStoryShort;
	public $dbStoryLong;

	public function __construct()
	{
		// Call the CI_Model constructor
		parent::__construct();

		$dbWriter = 'NuLLy dbWriter';
		$dbWriterDate = '2017 / 01 / 30';
		$dbBlogTitle = 'NuLLy dbBlogTitle';
		$dbStoryShort = 'NuLLy dbStoryShort';
		$dbStoryLong = 'NuLLy dbStory Long Basasdfasdf asdfasdf asdfasdf asdfasdf asdfasdfasdf asdf';
	}

	public function get_last_ten_entries()
	{
					$query = $this->db->get('entries', 10);
					return $query->result();
	}

	public function insert_entry()
	{
					$this->title    = $_POST['title']; // please read the below note
					$this->content  = $_POST['content'];
					$this->date     = time();

					$this->db->insert('entries', $this);
	}

	public function update_entry()
	{
					$this->title    = $_POST['title'];
					$this->content  = $_POST['content'];
					$this->date     = time();

					$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

}


?>
