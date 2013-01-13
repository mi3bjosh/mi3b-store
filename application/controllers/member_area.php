<?
class Member_area extends CI_Controller {
   function __construct()
	{
        parent::__construct();	
        $this->load->library(array('session'));
        $this->load->model(array('M_login'));
        $this->load->helper(array('html','url'));
    }
    
    function index(){
        if($this->M_login->check_logged()===FALSE)
            redirect(base_url().'login/');
        else{
            $data['body'] = 'Sudah Masuk';
            $this->load->view('user/member_area', $data);
        }
    }
}