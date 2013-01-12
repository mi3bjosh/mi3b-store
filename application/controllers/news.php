<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

  // num of records per page
	private $limit = 10;
	
	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		
		// load helper
		$this->load->helper('url');
		
		// load model
		$this->load->model('News_model','',TRUE);
	}
	
	function index($offset = 0)
	{
		// offset
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		
		// load data
		$newss = $this->News_model->get_paged_list($this->limit, $offset)->result();
		
		// generate pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('news/index/');
 		$config['total_rows'] = $this->News_model->count_all();
 		$config['per_page'] = $this->limit;
		$config['uri_segment'] = $uri_segment;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		// generate table data
		$this->load->library('table');
		$this->table->set_empty("&nbsp;");
		$this->table->set_heading('No', 'Title',  'Date ','insert date','modif date' ,'Delete','Actions','Delete/UnDelete');
		$i = 0 + $offset;
		foreach ($newss as $news)
		{
			$this->table->add_row(++$i, $news->title,date('d-m-Y ',strtotime($news->date)), date('d-m-Y H:i:s',strtotime($news->inserted_date)),date('d-m-Y H:i:s',strtotime($news->modified_date)),$news->is_deleted,
				anchor('news/view/'.$news->id,'view',array('class'=>'view')).' '.
				anchor('news/update/'.$news->id,'update',array('class'=>'update')),
				anchor('news/delete/'.$news->id,'delete',array('class'=>'delete')).' - '.
				anchor('news/undelete/'.$news->id,'undelete',array('class'=>'undelete'))
				//anchor('news/hide/'.$news->id,'delete',array('class'=>'delete','onclick'=>"return confirm('Are you sure want to delete this news?')"))
			);
		}
		$data['table'] = $this->table->generate();
		
		// load view
		$this->load->view('admin/newsList', $data);
	}
	
	function add()
	{
		// set empty default form field values
		$this->_set_fields();
		// set validation properties
		$this->_set_rules();
		
		// set common properties
		$data['title'] = 'Add new news';
		$data['message'] = '';
		$data['action'] = site_url('news/addNews');
		$data['link_back'] = anchor('news/index/','Back to list of news',array('class'=>'back'));
	
		// load view
		$this->load->view('admin/newsAdd', $data);
	}
	
	function addNews()
	{
		// set common properties
		$data['title'] = 'Add new news';
		$data['action'] = site_url('news/addNews');
		$data['link_back'] = anchor('news/index/','Back to list of persons',array('class'=>'back'));
		
		// set empty default form field values
		$this->_set_fields();
		// set validation properties
		$this->_set_rules();
		
		// run validation
		if ($this->form_validation->run() == FALSE)
		{
			$data['message'] = '';
		}
		else
		
		
		{
			// save data
			$news = array(
							'title' => $this->input->post('title'),
							'text' => $this->input->post('text'),
							'author' => $this->input->post('author'),
							'date' => date('Y-m-d', strtotime($this->input->post('date'))),
							'src' => $this->input->post('src'),
							'inserted_by' => (''),
							'inserted_date' => date('Y-m-d H:i:s'),
							//'modified_date' => '',
							'is_deleted' => ('0')
							);
			$id = $this->News_model->save($news);
			
			// set user message
			$data['message'] = '<div class="success">add new news success</div>';
		}
		
		// load view
		$this->load->view('admin/newsAdd', $data);
	}
	
	function view($id)
	{
		// set common properties
		$data['title'] = 'News Details';
		$data['link_back'] = anchor('news/index/','Back to list of news',array('class'=>'back'));
		
		// get news details
		$data['news'] = $this->News_model->get_by_id($id)->row();
		
		// load view
		$this->load->view('admin/newsView', $data);
	}
	
	function update($id)
	{
		// set validation properties
		$this->_set_rules();
		
		// prefill form values
		$news = $this->News_model->get_by_id($id)->row();
		$this->form_data->id = $id;
		$this->form_data->title = $news->title;
		$this->form_data->text = $news->text;
		$this->form_data->author = $news->author;
		$this->form_data->date = date('d-m-Y',strtotime($news->date));
		$this->form_data->src = $news->src;
		
		// set common properties
		$data['title'] = 'Update news';
		$data['message'] = '';
		$data['action'] = site_url('news/updateNews');
		$data['link_back'] = anchor('news/index/','Back to list of news',array('class'=>'back'));
	
		// load view
		$this->load->view('admin/newsEdit', $data);
	}
	
	function updateNews()
	{
		// set common properties
		$data['title'] = 'Update news';
		$data['action'] = site_url('news/updateNews');
		$data['link_back'] = anchor('news/index/','Back to list of news',array('class'=>'back'));
		
		// set empty default form field values
		$this->_set_fields();
		// set validation properties
		$this->_set_rules();
		
		// run validation
		if ($this->form_validation->run() == FALSE)
		{
			$data['message'] = '';
		}
		else
		{
			// save data
			$id = $this->input->post('id');
			$news = array('title' => $this->input->post('title'),
							'text' => $this->input->post('text'),
							'author' => $this->input->post('author'),
							'date' => date('Y-m-d', strtotime($this->input->post('date'))),
							'src' => $this->input->post('src'),
							'modified_date' => date('Y-m-d H:i:s')
							
							);
			$this->News_model->update($id,$news);
			
			// set user message
			$data['message'] = '<div class="success">update news success</div>';
		}
		
		// load view
		$this->load->view('admin/newsEdit', $data);
	}
	
	
	
	function delete($id)
	{
		// delete news
		$this->News_model->delete($id);
		
		// redirect to news list page
		redirect('news/index/','refresh');
	}
	
	function undelete($id)
	{
	 // delete news
		$this->News_model->undelete($id);
		
		// redirect to news list page
		redirect('news/index/','refresh');
	}
	
	// set empty default form field values
	function _set_fields()
	{
		$this->form_data->id = '';
		$this->form_data->title = '';
		$this->form_data->text = '';
		$this->form_data->author = '';
		$this->form_data->date = '';
		$this->form_data->src = '';
		$this->form_data->is_deleted = '';
	}
	
	// validation rules
	function _set_rules()
	{
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('text', 'Text', 'trim|required');
		$this->form_validation->set_rules('author', 'Author', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required|callback_valid_date');
		$this->form_validation->set_rules('src', 'Src', 'trim|required');
		
		$this->form_validation->set_message('required', '* required');
		$this->form_validation->set_message('isset', '* required');
		$this->form_validation->set_message('valid_date', 'date format is not valid. dd-mm-yyyy');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
	}
	
	// date_validation callback
	function valid_date($str)
	{
		//match the format of the date
		if (preg_match ("/^([0-9]{2})-([0-9]{2})-([0-9]{4})$/", $str, $parts))
		{
			//check weather the date is valid of not
			if(checkdate($parts[2],$parts[1],$parts[3]))
				return true;
			else
				return false;
		}
		else
			return false;
	}
}
?>
