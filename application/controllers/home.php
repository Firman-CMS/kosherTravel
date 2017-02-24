<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * feb 2017
*/
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->model(array('m_login'));
		// ini_set('display_errors', 1);
	}

	public function index()
	{
		// $data['menu'] 				= 'Dashboard';
		// $data['title'] 			= '';
      // ta['notif_message'] 	= $this->countNotifMessage();
		$data['content'] 			= $this->load->view('front/home/v_home');
		// $this->load->view('v_base', $data);
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
