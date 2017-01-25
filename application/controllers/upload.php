<?php

class Upload extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','file'));
	}

	function index(){
		// echo CI_VERSION;
		$data['menu']				= 'Content';
		$data['title'] 			= 'New Content';
		$data['notif_message'] 	= $this->countNotifMessage();
		$data['content'] 	= $this->load->view('content/v_new_content' , $data, true);
		$this->load->view('v_base', $data);
		
	}


	//Untuk proses upload foto
	function proses_upload(){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token = $this->input->post('token_foto');
        	$nama	 = $this->upload->data('file_name');
			//print_r($token);
			// print_r($nama['file_name']);
        	$this->db->insert('foto', array('nama_foto'=>$nama['file_name'],'token'=>$token));
        }
	}


	//Untuk menghapus foto
	function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');


		$foto=$this->db->get_where('foto',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file=FCPATH.'/upload-foto/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('foto',array('token'=>$token));

		}


		echo "{}";
	}

	function countNotifMessage(){
		$this->load->model('m_message', "", TRUE);
		$data = $this->m_message->countNotif();
		return $data;
	}

}