<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * feb 2017
*/
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('application');
		$this->load->helper('viewcontent');
      $this->load->model(array('m_message'));
      $this->load->model(array('m_home'));
      $this->load->model(array('m_menu'));
		// $this->load->model(array('m_login'));
		ini_set('display_errors', 1);
	}

   public function index()
	{
		$id = 1;
      $data['menu'] 		= 'Home';

		// $maincontent['menua'] = $this->m_menu->create_jsonMenu();
		$json = file_get_contents('./public/menujson_.json');
		$contentMenu = json_decode($json);
      $maincontent['id'] = $id;
      $maincontent['backgroundImg'] = $contentMenu;
		$maincontent['listContent'] = $this->m_home->getContent_Home($id);
		$maincontent['headerContent'] = $this->m_home->getHeaderContent_Home($id);

		$data['content']  = $this->load->view('front/home/v_home', $maincontent, true);
		$this->load->view('front/v_base',$data );
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
