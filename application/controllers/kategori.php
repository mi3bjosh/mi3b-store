<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _kategori_view_output($output = null)
	{
		$this->load->view('kategori_view.php',$output);	
	}
	
	function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_kategori_view_output($output);
	}
	
	function index()
	{
		$this->_kategori_view_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	
		
	function kategori_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('kategori');
			$crud->set_subject('Kategori');
			$crud->unset_columns('kategoriDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));
			
			$output = $crud->render();
			
			$this->_kategori_view_output($output);
	}
	

	
	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}
	
	
}
