<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * jan 2017
*/

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
		ini_set('display_errors', 1);
		
		if (empty($this->session->userdata('logged_in'))) {
		      redirect('cms','refresh');
		}
		$this->load->model(array('m_user'));
		$this->load->helper('application');
	}

	public function index(){
		$data['menu']	= 'User';
		$data['title'] 	= 'List User';
		$data['notif_message'] = $this->countNotifMessage();
		
		$mainContent['data'] = $this->m_user->getAll();

		$data['content'] = $this->load->view('user/v_list_user' , $mainContent, true);
		$this->load->view('v_base', $data);
	}

	public function newUser(){
		$data['menu']	= 'User';
		$data['title'] = 'New User';
		$data['notif_message'] = $this->countNotifMessage();
		$data['content'] = $this->load->view('user/v_new_user' , $data, true);
		$this->load->view('v_base', $data);
	}

	public function edit($id){
		if($this->session->userdata('is_admin') != 1){
			$this->session->set_flashdata('result_notif', 'You are not authorized to access edit user, Please Login as Admin');
			header('location:'. base_url('user'));
			// redirect('cms','refresh');
		}
		$data['menu']	= 'User';
		$data['title'] = 'Edit User';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_user->getByid($id);

		$data['content'] = $this->load->view('user/v_edit_user' , $mainContent, true);
		$this->load->view('v_base', $data);
	}

	public function add_new_user(){
		$this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
      $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
      $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean');

      if($this->form_validation->run() == FALSE) {
      	$this->session->set_flashdata('result_notif', validation_errors() );
          header('location:'. base_url('user/newUser'));
      }else {
			$this->load->model('m_user');

			$salt  			= 's1l4l4h1';
			$var_pass 		= mysql_real_escape_string($this->input->post('password'));
			$pass  			= sha1($salt.md5($var_pass));

			$data['username']	= $this->input->post('username');
			$data['email'] 		= $this->input->post('email');
			$data['password'] 	= $pass;
			$data['is_admin'] 	= $this->input->post('role');

			$this->m_user->save($data);
		}
	}

	function countNotifMessage(){
		$this->load->model(array('m_message'));
		$data = $this->m_message->countNotif();
		return $data;
	}

	function logout() {
        $this->session->sess_destroy();
        redirect('cms');
    }
}
