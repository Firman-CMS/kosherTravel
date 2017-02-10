<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * jan 2017
*/

class Menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
		ini_set('display_errors', 1);

		if (empty($this->session->userdata('logged_in'))) {
		      redirect('cms','refresh');
		}
		$this->load->model(array('m_menu'));
		$this->load->helper('application');
		$this->load->helper(array('form', 'url'));
	}


	public function index(){
		$data['menu']	= 'Menu';
		$data['title'] = 'List Menu';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_menu->getAll();

		$data['content'] = $this->load->view('menu/v_list_menu' , $mainContent, true);
		$this->load->view('v_base', $data);
	}


	public function addNewParent(){
		$data['menu']	= 'Menu';
		$data['title'] = 'New Menu Parent';
		$data['notif_message'] = $this->countNotifMessage();
		$data['content'] = $this->load->view('menu/v_new_menu_parent' , $data, true);
		$this->load->view('v_base', $data);
	}


	public function add_new_parent(){
		$this->form_validation->set_rules('name', 'name', 'required|trim|xss_clean');

      if($this->form_validation->run() == FALSE) {
      	$this->session->set_flashdata('result_notif', validation_errors() );
          header('location:'. base_url('menu/addNewParent'));
      }else {
			$data['name']	= $this->input->post('name');

			$this->m_menu->save_new_parent($data);
		}
	}

	public function editMenuparent($id){
		if($this->session->userdata('is_admin') != 1){
			$this->session->set_flashdata('result_notif', 'You are not authorized to access edit user, Please Login as Admin');
			header('location:'. base_url('menu'));
			// redirect('cms','refresh');
		}
		$data['menu']	= 'Menu';
		$data['title'] = 'Edit Menu Parent';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_menu->getByidParent($id);

		$data['content'] = $this->load->view('menu/v_edit_parent' , $mainContent, true);
		$this->load->view('v_base', $data);
	}


	public function edit_new_parent(){
		$this->form_validation->set_rules('name', 'name', 'required|trim|xss_clean');

      if($this->form_validation->run() == FALSE) {
      	$this->session->set_flashdata('result_notif', validation_errors() );
          header('location:'. base_url('menu/addNewParent'));
      }else {
			$data['name']	= $this->input->post('name');
			$id	= $this->input->post('id');
			print_r($data);
			$this->m_menu->update_parent($data, $id);
		}
	}


	public function del_Parent($id){
		if($this->session->userdata('is_admin') != 1){
			$this->session->set_flashdata('result_notif', 'You are not authorized to access delete menu, Please Login as Admin');
			header('location:'. base_url('menu'));
			// redirect('cms','refresh');
		}
		// $data['menu']	= 'Menu';
		// $data['title'] = 'Edit Menu Parent';
		// $data['notif_message'] = $this->countNotifMessage();

		$this->m_menu->del_parent($id);

		// $data['content'] = $this->load->view('menu/v_edit_parent' , $mainContent, true);
		// $this->load->view('v_base', $data);
	}


	public function newMenu(){
		$data['menu']	= 'Menu';
		$data['title'] = 'New Menu';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['menu'] = $this->m_menu->getParentMenu();

		$data['content'] = $this->load->view('menu/v_new_menu' , $mainContent, true);
		$this->load->view('v_base', $data);
	}

	public function add_new_menu(){
		$this->form_validation->set_rules('name', 'name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('description', 'description', 'required|trim|xss_clean');

      if($this->form_validation->run() == FALSE) {
      	$this->session->set_flashdata('result_notif', validation_errors() );
          header('location:'. base_url('menu/newMenu'));
      }else {
			/* config upload image */
			$config['upload_path'] = './public/menu/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '500'; #kB
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
				#upload original image
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload()) { /*if upload failed*/
				$this->session->set_flashdata('result_notif', $this->upload->display_errors());
				header('location:'. base_url('menu/newMenu'));
			}

			$image_data = $this->upload->data();
			#upload thumb image
			$config2 = array(
				'image_library' 		=> 'gd',
				'source_image'      => $image_data['full_path'], //path to the uploaded image
				'new_image'         => './public/menu/thumb', //path to
				'maintain_ratio'    => true,
				'width'             => 480,
				'height'            => 268
			);
			$this->load->library('image_lib',$config2);
			if ( ! $this->image_lib->resize()) { /*if upload thumb failed*/
				$this->session->set_flashdata('result_notif', $this->image_lib->display_errors());
				header('location:'. base_url('menu/newMenu'));
			}

			$data['name']			= $this->input->post('name');
			$data['description']	= $this->input->post('description');
			$data['image']			= $image_data['file_name'];
			$data['id_parent']	= $this->input->post('id_parent');
			// print_r($data);
			$this->m_menu->save_new_menu($data);
		}
	}

	function list_menu(){
		$data['menu']	= 'Menu';
		$data['title'] = 'New Menu';
		$data['notif_message'] = $this->countNotifMessage();

		$mainContent['data'] = $this->m_menu->getAllmenu();

		$data['content'] = $this->load->view('menu/v_list_allmenu' , $mainContent, true);
		$this->load->view('v_base', $data);
	}

	function countNotifMessage(){
		$this->load->model(array('m_message'));
		$data = $this->m_message->countNotif();
		return $data;
	}


	/*
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
	*/

	/*
	function upload()
	{
		$this->load->view('menu/test2', array('error' => ' ' ));
	}

	function do_upload()
	{//phpinfo();
		// var_dump(gd_info());
	 $original=realpath(APPPATH.'../public/content');
    $resize = realpath(APPPATH.'../public/content');
    $thumbs = realpath(APPPATH.'../public/content');

		$config['upload_path'] = './public/content/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '500'; #KB
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		// print_r($config);die;
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		print_r($image_data);
		// print_r($image_data);
		/*
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('menu/test2', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('menu/test1', $data);
		}

		// $this->load->library('upload', $config);
		// $image_data = $this->upload->data(); //upload the image
		// if (($this->orig_width == $this->width AND $this->orig_height == $this->height) AND ($this->source_image != $this->new_image && $this->new_image != ''))
		//your desired config for the resize() function
		// $this->load->library('image_lib');
		$config2 = array(
		'image_library' 		=> 'gd',
		'source_image'      => $image_data['full_path'], //path to the uploaded image
		'new_image'         => './public/content/tmp', //path to
		'maintain_ratio'    => true,
		'width'             => 128,
		'height'            => 128
		);

		//this is the magic line that enables you generate multiple thumbnails
		//you have to call the initialize() function each time you call the resize()
		//otherwise it will not work and only generate one thumbnail
		// $this->load->library('image_lib', $config2);
		$this->load->library('image_lib',$config2);
		// $this->image_lib->initialize($config2);
		$this->image_lib->resize();
		// var_dump(gd_info());
		echo $this->image_lib->display_errors();
	}

	function do_resize()
	{	//phpinfo();
	    // $filename = $this->input->post();
	    $filename = $_FILES['userfile']['name'];
	    $source_path = './public/content/tmp/'.$filename;
	    $target_path = './public/content/'.$filename;
	    $config_manip = array(
	      //   'image_library' => 'gd2',
	        'source_image' => $source_path,
	        'new_image' => $target_path,
	        'maintain_ratio' => TRUE,
	        'create_thumb' => TRUE,
	        'thumb_marker' => '_thumb',
	        'width' => 150,
	        'height' => 150
	    );

	    $this->load->library('image_lib', $config_manip);
	    if (!$this->image_lib->resize()) {
	        echo $this->image_lib->display_errors();
	    }
	    // clear //
	    $this->image_lib->clear();
	}


	function do_upload2()
{
    $config['upload_path'] = './public/content/tmp/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    // validate the POST data
   #  http://codeigniter.com/user_guide/libraries/form_validation.html
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('description', 'Description', 'trim|required');

    if ($this->form_validation->run() == FALSE)
    {
        // failed validation
        $this->load->view('menu/test1');
		  echo "string";
        // quit here
        return false;
    }

    if ( ! $this->upload->do_upload())
    {
        // no file uploaded or failed upload
        $error = array('error' => $this->upload->display_errors());
      //   $this->load->view('menu/test1', $error);
		echo $error;
    }
    else
    {
        // success
        $data = $this->upload->data();
        $title = $this->input->post('title');
        $description = $this->input->post('description');
		  print_r($data);
        // a model that deals with your image data (you have to create this)
      //   $this->your_upload_model->add($title, $description, $data["file_name"]);

        $this->load->view('upload_success', $data);
    }
}


	function do_upload3(){
	    $this->load->library('image_lib');
	    $config = array(
	    'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
	    'max_size'          => 2048, //2MB max
	    'upload_path'       => $this->original_path //upload directory
	  );

	    $this->load->library('upload', $config);
	    $image_data = $this->upload->data(); //upload the image

	    //your desired config for the resize() function
	    $config = array(
	    'source_image'      => $image_data['full_path'], //path to the uploaded image
	    'new_image'         => $this->resized_path, //path to
	    'maintain_ratio'    => true,
	    'width'             => 128,
	    'height'            => 128
	    );

	    //this is the magic line that enables you generate multiple thumbnails
	    //you have to call the initialize() function each time you call the resize()
	    //otherwise it will not work and only generate one thumbnail
	    $this->image_lib->initialize($config);
	    $this->image_lib->resize();

	    $config = array(
	    'source_image'      => $image_data['full_path'],
	    'new_image'         => $this->thumbs_path,
	    'maintain_ratio'    => true,
	    'width'             => 36,
	    'height'            => 36
	    );
	    //here is the second thumbnail, notice the call for the initialize() function again
	    $this->image_lib->initialize($config);
	    $this->image_lib->resize();
	  }
	  */

}
