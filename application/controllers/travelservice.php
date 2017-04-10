<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * feb 2017
*/
class Travelservice extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('application');
		$this->load->helper('viewcontent');
      $this->load->model(array('m_travel'));
      ini_set('display_errors', 1);
	}

   public function index()
	{
		$id = 13;
      $data['menu'] 		= 'Travel';

		$json = file_get_contents('./public/menujson_.json');
		$contentMenu = json_decode($json);
      
      $maincontent['id'] = $id;
      $maincontent['backgroundImg'] = $contentMenu;
		$maincontent['listContent'] = $this->m_travel->getContent_Travel($id);
		$maincontent['headerContent'] = $this->m_travel->getHeaderContent_Travel($id);

		$data['content']  = $this->load->view('front/travel/v_index', $maincontent, true);
		$this->load->view('front/v_base',$data );
	}
}
