<?php
class News_model_user extends CI_Model {
  
	private $tbl_news= 'news';
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function list_all(){
		$this->db->order_by('id','asc');
		$query = $this->db->get('news');
		return $query->result();
	}
	
	function count_all(){
		return $this->db->count_all($this->tbl_news);
	}
	
	function get_paged_list($limit = 10, $offset = 0){
		$this->db->order_by('id','asc');
		return $this->db->get($this->tbl_news, $limit, $offset);
	}
	
	function get_by_id($id){
		$this->db->where('id', $id);
		$query = $this->db->get('news');
		return $query->result();
	}
	
}
?>
