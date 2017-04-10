<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * feb 2017
*/
class Aboutus extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('application');
		$this->load->helper('viewcontent');
      $this->load->model(array('m_about'));
      ini_set('display_errors', 1);
	}

   public function index()
	{
		$id = 10;
      $data['menu'] 		= 'About';

		$json = file_get_contents('./public/menujson_.json');
		$contentMenu = json_decode($json);
		// print_r($contentMenu);die;
      $maincontent['id'] = $id;
      $maincontent['backgroundImg'] = $contentMenu;
		$maincontent['listContent'] = $this->m_about->getContent_About($id);
		$maincontent['headerContent'] = $this->m_about->getHeaderContent_About($id);

		// print_r($maincontent);
		$data['content']  = $this->load->view('front/about/v_about', $maincontent, true);
		$this->load->view('front/v_base',$data );
	}
}
