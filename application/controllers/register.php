<?
class Register extends CI_Controller {
    function __construct()
	{
        	parent::__construct();	
            $this->load->library(array('form_validation'));
            $this->load->model(array('M_captcha', 'M_encryption'));
            $this->load->helper(array('form', 'url'));
            $this->load->database();
    }

    function index(){
			
        $data['title'] = 'MI3B';
        $sub_data['captcha_return'] ='';
        $sub_data['cap_img'] = $this ->M_captcha->make_captcha();
        if($this->input->post('submit')) {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]|xss_clean');
            $this->form_validation->set_rules('email', 'Email',  'trim|required|min_length[3]|max_length[50]|valid_email');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required');
            $this->form_validation->set_rules('captcha', 'Captcha', 'required');
            if ($this->form_validation->run() == FALSE){
                $data['body']  = $this->load->view('user/register', $sub_data, true);
            }
            else{
                if($this->M_captcha->check_captcha()==TRUE){
                    $nama = $this->input->post('nama');
                    $password = $this->input->post('password');
                    $email = $this->input->post('email');
					$alamat = $this->input->post('alamat');
					$telepon = $this->input->post('telepon');
                    $check_query = "SELECT * FROM `user_codeigniter` WHERE `email`='$email'";
                    $query = $this->db->query($check_query);
                    if ($query->num_rows() > 0){
                        $sub_data['captcha_return'] = 'Maap, username atau email yang anda masukkan telah digunakan pihak lain, silahkan ganti<br/>';
                        $data['body']  = $this->load->view('user/register', $sub_data, true);
                    }
                    else{
						$rand_salt = $this->M_encryption->genRndSalt();
                        $encrypt_pass = $this->M_encryption->encryptUserPwd($password,$rand_salt);
                        $input_data = array(
                            'nama' => $nama,
                            'password' => $encrypt_pass,
                            'email' => $email,
							'alamat' => $alamat,
							'telepon' => $telepon,
							'salt' => $rand_salt
                        );
                        if($this->db->insert('user_codeigniter', $input_data)){
							
                            $data['body']  = "join success, silahkan login<br/>";
                        }
                        else 
                            $data['body']  = "error on query";
                    }
                }
                else{
                        $sub_data['captcha_return'] = 'Maap captcha salah<br/>';
                        $data['body']  = $this->load->view('user/register', $sub_data, true);
                }
          }

        }
        else{
                $data['body']  = $this->load->view('user/register', $sub_data, true);
        }
        $this->load->view('_output_html', $data);
            
    }
	function register(){
		
		$this->load->helper('register');
	}
}
?>