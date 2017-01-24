<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * jan 2017
*/

class Message extends CI_Controller {

	function __construct() {
		parent::__construct();
		session_start();
		ini_set('display_errors', 1);
		
		if (empty($this->session->userdata('logged_in'))) {
		      redirect('cms','refresh');
		}
		$this->load->model(array('m_message'));
		$this->load->helper('application');
	}

	public function index(){

		$data['menu'] 	= 'Message';
		$data['title'] = 'Inbox';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_message->getAllmessages();

		$data['content'] = $this->load->view('message/v_message_inbox' , $mainContent, true);
		$this->load->view('v_base', $data);

	}

	public function readMessage(){
		$id = $_GET['id'];
		$data['menu']	= 'Message';
		$data['title'] = 'Read Message';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_message->getByid($id);
		$this->as_read($id);
		// print_r($mainContent);die;
		$data['content'] = $this->load->view('message/v_message_read' , $mainContent, true);
		$this->load->view('v_base', $data);
	}

	public function trash(){
		$data['menu'] 	= 'Message';
		$data['title'] 	= 'Trash';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_message->getTrashmessages();

		$data['content'] = $this->load->view('message/v_message_trash' , $mainContent, true);
		$this->load->view('v_base', $data);
	}

	public function testNew(){
		$data['menu'] 	= 'Message';
		$data['title'] 	= 'New Message';
		$data['notif_message'] = $this->countNotifMessage();
		$data['content'] = $this->load->view('message/test_new_message' , $data, true);
		$this->load->view('v_base', $data);

	}

	public function testNew_process(){

		$data['subject']	= $this->input->post('subject');
		$data['email'] 		= $this->input->post('email');
		$data['from'] 		= $this->input->post('name');
		$data['phone'] 		= $this->input->post('phone');
		$data['body'] 		= $this->input->post('body');

		$this->m_message->save($data);
	}

	public function as_read($id){
		$data = $this->m_message->updateAsread($id);

	}

	function countNotifMessage(){
		// $this->load->model(array('m_message'));
		$data = $this->m_message->countNotif();
		return $data;
	}


}
