<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_user extends CI_Controller {

  // num of records per page
	private $limit = 5;
	
	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		
		// load helper
		$this->load->helper('url');
		
		// load model
		$this->load->model('News_model_user','',TRUE);
	}
	
	function index($offset = 0)
	{
		// offset
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		// load data
		$person = $this->News_model_user->get_paged_list($this->limit, $offset)->result();
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('news_user/index/');
 		$config['total_rows'] = $this->News_model_user->count_all();
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		// generate table data
		
		// load view
		$data['query'] = $this->News_model_user->get_paged_list($this->limit, $offset)->result();
		$this->load->view('user/news', $data);
	}

	function view($id)
	{
		// set common properties
		//$data['title'] = 'News Details';
		//$data['link_back'] = anchor('news/index/','Back to list of news',array('class'=>'back'));
		
		// get news details
		$data['news'] = $this->News_model_user->get_by_id($id);
		
		// load view
		$this->load->view('user/newsView', $data);
	}
	
}
?>
