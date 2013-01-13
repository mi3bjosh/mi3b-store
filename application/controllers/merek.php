<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merek extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		
		$this->load->library('grocery_CRUD');	
	}
	
	function _merek_view_output($output = null)
	{
		$this->load->view('merek_view.php',$output);	
	}
	

	function index()
	{
		$this->_merek_view_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	
		function merek_product()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('merek');
			$crud->set_subject('Merek');
			$crud->unset_columns('merekDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));
			
			$output = $crud->render();
			
			$this->_merek_view_output($output);
	}	
	
	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}
	

	
}
