<?php
class M_login extends CI_Model {

    function __construct()
	{
        parent::__construct();	
            $this->load->library('session'); 
            $this->load->database();
            $this->load->helper('url');
			$this->load->model(array('M_encryption'));
    }

	/***************
	* fungsi untuk process dari form login
	* 
	***************/
	function process_login($login_array_input = NULL){
            if(!isset($login_array_input) OR count($login_array_input) != 2)
                return false;
            //set variable nya
            $email = $login_array_input[0];
            $password = $login_array_input[1];
            //ambil dari database percobaan
            $query = $this->db->query("SELECT * FROM `user_codeigniter` WHERE `email`= '".$email."' LIMIT 1");
            if ($query->num_rows() > 0)
            {
                $row = $query->row();
                $user_id = $row->ID;
                $user_pass = $row->password;
				$user_salt = $row->salt;
                 if($this->M_encryption->encryptUserPwd( $password,$user_salt) === $user_pass){ 
                    $this->session->set_userdata('logged_user', $user_id);
                    return true;
                }
                return false;
            }
            return false;
	}
	
	/***************
	* fungsi untuk apakah user telah logged atau belum
	* 
	***************/
	function check_logged(){
		return ($this->session->userdata('logged_user'))?TRUE:FALSE;
	}
	
	/***************
	* fungsi untuk mereturn id user yang sedang login
	* 
	***************/
	function logged_id(){
		return ($this->check_logged())?$this->session->userdata('logged_user'):'';
	}
}