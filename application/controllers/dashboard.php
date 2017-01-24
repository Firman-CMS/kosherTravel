<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * jan 2017
*/
class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->model(array('m_login'));
		// ini_set('display_errors', 1);
		if (empty($this->session->userdata('logged_in'))) {
          redirect('cms','refresh');
    	}
	}

	public function index()
	{
		$data['menu'] 				= 'Dashboard';
		$data['title'] 			= '';
	 	$data['notif_message'] 	= $this->countNotifMessage();
		$data['content'] 			= $this->load->view('v_dashboard' , $data, true);
		$this->load->view('v_base', $data);
	}

	function countNotifMessage(){
		$this->load->model('m_message', "", TRUE);
		$data = $this->m_message->countNotif();
		return $data;
	}

	// public function index(){
	// 	ini_set('display_errors', 1);
	// 	$data['title'] ='New User';
	// 	$data['content'] = $this->load->view('user/v_new_user' , $data, true);
	// 	$this->load->view('v_base', $data);
	// }

}
