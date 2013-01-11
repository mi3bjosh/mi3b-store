<?php

class Ecommerce extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('index');
	}
	
	function produk(){
	$this->load->view('user/products');
	}
	
	function news(){
	$this->load->view('user/news');
	}
	function forum($id = null){		
		if ($id == null){
			$data['thread'] = $this->m_forum->getThread();
			$data['category'] = $this->m_forum->getCategory();
			$this->load->view('user/forum',$data); 
		}else{
			$data['thread'] = $this->m_forum->getThreadById($this->uri->segment(3));
			$data['category'] = $this->m_forum->getCategoryById($this->uri->segment(3));
			$this->load->view('user/forum',$data);
		}
	}

	
	function thread(){
		
		$this->m_forum->updateViewed($this->uri->segment(3));
		$data['thread'] = $this->m_forum->getThreadPostById($this->uri->segment(3));
		$data['post'] = $this->m_forum->getPostByid($this->uri->segment(3));
		$this->load->view('user/thread',$data);
	}
	
	function category(){
	
		$data['threadCat'] = $this->m_forum->getThreadCategoryById($this->uri->segment(3));
		$data['comment'] = $this->m_forum->getComment();
		$this->load->view('user/category',$data);		
	}
	
	function createThread(){
		$this->m_forum->insertThread($this->input->post('id'));
		redirect('ecommerce/forum/'.$this->uri->segment(3));
	}
	
	function createPost(){
		$this->m_forum->insertPost($this->input->post('id'));
		redirect('ecommerce/thread/'.$this->uri->segment(3));
	}
	
	function post_reply(){
		
		$image_array = get_clickable_smileys(base_url().'style/images/smileys/', 'comments');
		$col_array = $this->table->make_columns($image_array, 8);
		
		$data['smiley_table'] = $this->table->generate($col_array);
		$data['thread'] = $this->m_forum->getThreadPostById($this->uri->segment(3));
		$this->load->view('user/post_reply',$data);
	}
	function caratransaksi(){
	$this->load->view('user/caratransaksi');
	}
	function contact(){
	$this->load->view('user/contact');
	}
	function detail(){
	$this->load->view('user/productdetail');
	}
	function cart(){
	$this->load->view('user/shoppingcart');
	}
	function admin(){
	$this->load->view('admin/index');
	}
	function produk_admin(){
	$this->load->view('admin/produk_admin');
	}
	function kategori_admin(){
	$this->load->view('admin/kategori_admin');
	}
	function merk_admin(){
	$this->load->view('admin/merk_admin');
	}
	function forum_admin(){
	$this->load->view('admin/forum_admin');
	}
	function news_admin(){
	$this->load->view('admin/news_admin');
	}
	function manajemen_user(){
	$this->load->view('admin/manajemen_user');
	}
	function message_admin(){
	$this->load->view('admin/message_admin');
	}
	function list_order(){
	$this->load->view('admin/list_order');
	}
	
}

?>
