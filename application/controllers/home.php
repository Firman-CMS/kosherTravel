<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * feb 2017
*/
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
      $this->load->model(array('m_message'));
		// $this->load->model(array('m_login'));
		// ini_set('display_errors', 1);
	}

   public function index()
	{
      $data['menu'] 		= 'Dashboard';
		$maincontent['content']  = $this->load->view('front/home/v_home', $data, true);
		$this->load->view('front/v_base',$maincontent );
	}

   public function newmessage(){
		$data['subject']	= $this->input->post('subject');
		$data['email'] 	= $this->input->post('email');
		$data['from'] 		= $this->input->post('from');
		$data['phone'] 	= $this->input->post('phone');
		$data['body'] 		= $this->input->post('body');

		$this->m_message->save($data);
	}

}
