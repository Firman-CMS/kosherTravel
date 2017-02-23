<?php
/*
 * Firman Silalahi
 * firman.silahi@gmail.com
 * feb 2017
*/
class Contents extends CI_Controller
{

	function __construct(){
		parent::__construct();
		session_start();
		ini_set('display_errors', 1);

		if (empty($this->session->userdata('logged_in'))) {
		      redirect('cms','refresh');
		}
		$this->load->database();
		$this->load->helper(array('url','file'));
		$this->load->model(array('m_menu'));
		$this->load->model(array('m_content'));
	}

	function index(){
		// echo CI_VERSION;
		$data['menu']			= 'Content';
		$data['title'] 			= 'New Content';
		$data['notif_message'] 	= $this->countNotifMessage();

		$mainContent['menu'] = $this->m_menu->getParentMenu();

		$data['content'] 	= $this->load->view('contents/v_new_contents' , $mainContent, true);
		$this->load->view('v_base', $data);

	}

	function newContent() {
		// echo CI_VERSION;
		$data['menu']				= 'Content';
		$data['title'] 			= 'New Content';
		$data['notif_message'] 	= $this->countNotifMessage();

		$mainContent['menu'] = $this->m_menu->getParentMenu();

		$data['content'] 	= $this->load->view('contents/v_new_contents' , $mainContent, true);
		$this->load->view('v_base', $data);

	}

	function actionSave() {
		$data = $this->input->post();
		$this->m_content->action_save($data);
	}


	function listContent() {
		$data['menu']				= 'Content';
		$data['title'] 			= 'Edit Content';
		$data['notif_message'] 	= $this->countNotifMessage();

		$mainContent['data'] = $this->m_content->getListContent();
		// print_r($mainContent);die;
		$data['content'] 	= $this->load->view('contents/v_list_contents' , $mainContent, true);
		$this->load->view('v_base', $data);

	}

	function contentImage() {
		$data['menu']				= 'Content';
		$data['title'] 			= 'Upload Content Image';
		$data['notif_message'] 	= $this->countNotifMessage();

		if (isset($_GET["id"])) {
			$pid = intval($_GET["id"]);
			$mainContent['id'] = $pid;
		}else {
			$this->session->set_flashdata('result_notif', 'There is No Data');
			header('location:'. base_url('contents/listContent'));
			 exit();
		}
		// get the last product in the product table
		//Provide a link for product images to be uploaded
		// try {
		// $results = "SELECT id_content, title, image FROM contents where id_content = $pid LIMIT 1 ";
		// 		// $results->bindValue(1, $pid);
		// 		// $results->execute();
		// 		$query = $this->db->query($results);
		// 		$pros = $query->result_array();
		// 	} catch (Exception $e) {
		// 		echo "Data could not be retrieved from the database.";
		// 		exit;
		// 	}
			$pros = $this->m_content->getContentUploadById($pid);
			// print_r($pros[0]['image']);die;
			// $pros = $query->result_array();
			// $pros = $results->fetch(PDO::FETCH_ASSOC);
			$num_files_array = $pros[0]['image'];
			$num_files_array = rtrim($num_files_array,',');
			$num_files_array = explode(",", $num_files_array);
			$result_count = count($num_files_array);

			$storeFolder = FCPATH.'public/content/';   // Declare a variable for destination folder.
			$storeFolder_thumb = FCPATH.'public/content/thumb/';   // Declare a variable for destination folder.

		if (!empty($_FILES)) {

			 $tempFile = $_FILES['file']['tmp_name'];          // If file is sent to the page, store the file object to a temporary variable.
			 $targetPath = $storeFolder;  // Create the absolute path of the destination folder.

			 // Adding timestamp with image's name so that files with same name can be uploaded easily.
			 $date = new DateTime();
			 $newFileName = date("DMjGisY")."".rand(1000,9999).$_FILES['file']['name'];
			 $targetFile =  $targetPath.$newFileName;  // Create the absolute path of the uploaded file destination.
			  // Create the absolute path of the uploaded file destination.
			$FileType = pathinfo($targetFile,PATHINFO_EXTENSION);
			//
			if($result_count >= 5){
				header("HTTP/1.0 404 Not Found");
				die();
			}
			//Check file size
			if ($_FILES["file"]["size"] > 21534336) {
				header("HTTP/1.0 404 Not Found");
				die();
			}
			// Allow certain file formats
			if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif") {
				header("HTTP/1.0 404 Not Found");
				exit();
			}
			//move_uploaded_file($tempFile,$targetFile); // Move uploaded file to destination.
			  // Add product  array to database
			 if (move_uploaded_file($tempFile,$targetFile)){
				 $sizeimg = getimagesize($targetFile);

				 $percent = 0.7;
				 $newwidth = $sizeimg[0] * $percent;
				 $newheight = $sizeimg[1] * $percent;

				 $config2 = array(
	 				'image_library' 		=> 'gd',
	 				'source_image'      => $targetFile, //path to the uploaded image
	 				'new_image'         => './public/content/thumb', //path to thumb
	 				'maintain_ratio'    => true,
	 				'width'             => intval($newwidth),
	 				'height'            => intval($newheight)
	 			);

	 			$this->load->library('image_lib',$config2);
	 			if ( ! $this->image_lib->resize()) { /*if upload thumb failed*/
	 				$this->session->set_flashdata('result_notif', $this->image_lib->display_errors());
	 				header('location:'. base_url('menu/newMenu'));
	 			}

					$newFileNamedb = $newFileName.',';
					// try {
					// 	$results = "SELECT id_content, title, image FROM contents where id_content = $pid";
					// 	// $results->bindParam(1,$pid);
					// 	// $results->execute();
					// 	$query = $this->db->query($results);
					// } catch (Exception $e) {
					// 	echo "Data could not be retrieved from the database.";
					// 	exit;
					// }
					//  $p = $results->fetch(PDO::FETCH_ASSOC);
					// $p = $query->result_array();
					$p = $this->m_content->getContentUploadById($pid);
					 $p_array = $p[0]['image'];
					 if($p_array != ''){
						$p_array2 = $p_array.$newFileNamedb;
					 } else {
						 $p_array2 = $newFileNamedb;
					 }
					 $dataimg['image'] = $p_array2;
					// try{
					// $stmt = "UPDATE `contents`
					// 				SET  image = ?
					// 				WHERE id_content = $pid";
					// 		$this->db->query($stmt, array($p_array2));
					// 		// $stmt->execute(array($p_array2, $pid));
					//
					// 	}
					//
					// 	catch(PDOException $e)
					// 			{
					// 				echo $sql . "<br>" . $e->getMessage();
					// 				exit();
					// 		}
					$this->m_content->updateImgById($pid, $dataimg);
		 } else {

		  //upload failed, echo back negative response to dropzone.js
		  $this->output->set_header("HTTP/1.0 400 Bad Request");
		  echo "Error uploading file";

		}
		}
		// $mainContent['data'] = $this->m_content->getListContent();
		// print_r($mainContent);die;
		$data['content'] 	= $this->load->view('contents/testupload' , $mainContent, true);
		$this->load->view('v_base', $data);

	}

	function actionDel_Image() {
		// include_once 'database.php';
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$filename = $_POST['filename'];
			$id = $_POST['id'];
			$upload_dir = FCPATH.'public/content/';
			$targetPath = $upload_dir;
			$filenamedb = $filename.',';
		// try{
		// 	$sql = "UPDATE `contents` SET image=REPLACE(image,'".$filenamedb."','')";
		// 	// Prepare statement
		// 	// $stmt = $db->prepare($sql);
		//
		// 	// execute the query
		// 	// $stmt->execute();
		// 	$this->db->query($sql);
		// 	// echo a message to say the UPDATE succeeded
		// 	echo "UPDATED successfully";
		// }
		// catch(PDOException $e)
		// {
		// 	echo $sql . "<br>" . $e->getMessage();
		// }
		$update = $this->m_content->unlinkImgById($id, $filenamedb);
		echo $update;

		unlink($targetPath.$filename);
		print_r(" | Successfully deleted.");
		}

	}

	function setPublish() {

	}

	function setNotpublish(){
		$id = intval($_GET["id"]);
		$this->m_content->set_publish($id); 
	}

	function getContentimage() {
		$id = intval($_GET["id"]);
		$data = $this->m_content->get_contentImage($id);
		echo $data;
	}

/*
	function edit_content() {
		if (isset($_GET["id"])) {
			$pid = intval($_GET["id"]);
		}else {
		    header("location: index.php");
		    exit();
		}

		# Pindah ke model
		try {
		$results = "
			SELECT *
			FROM `myproducts`
			WHERE pid = $pid
			LIMIT 1";
			// $results->bindValue(1, $pid);
			// $results->execute();
		$query = $this->db->query($results);
		// var_dump($results);
		} catch (Exception $e) {
			echo "Data could not be retrieved from the database.";
			exit;
		}

		$pros = $query->result_array();
		$num_files_array = $pros[0]['filename'];
		$num_files_array = rtrim($num_files_array,',');
		$num_files_array = explode(",", $num_files_array);
		$result_count = count($num_files_array);



	}

	function upload_content() {

		$storeFolder =  FCPATH.'public/content/';

		if (!empty($_FILES)) {

			// If file is sent to the page, store the file object to a temporary variable.
			$tempFile = $_FILES['file']['tmp_name'];
			$data = $this->input->post();

			// Create the absolute path of the destination folder.
			$targetPath = $storeFolder;
			// var_dump($targetPath);die;

			// Adding timestamp with image's name so that files with same name can be uploaded easily.
			$date = new DateTime();
			$newFileName = date("DMjGisY")."_".$_FILES['file']['name'];
			$targetFile =  $targetPath.$newFileName; // Create the absolute path of the uploaded file destination.
			$FileType = pathinfo($targetFile,PATHINFO_EXTENSION);

			//

			// if($result_count >= 3){
			// header("HTTP/1.0 404 Not Found");
			// die();
			// }


			//Check file size
			if ($_FILES["file"]["size"] > 21534336) {
			header("HTTP/1.0 404 Not Found");
			die();
			}
			// Allow certain file formats
			if($FileType != "jpg" && $FileType != "png") {
			header("HTTP/1.0 404 Not Found");
			exit();
			}
			// print_r(move_uploaded_file($tempFile,$targetFile));

			//move_uploaded_file($tempFile,$targetFile); // Move uploaded file to destination.
			if (move_uploaded_file($tempFile,$targetFile)){
				$data['filename'] = $newFileName.',';
			}

			// print_r($data);
			// die;
			$this->db->insert('myproducts', $data);

			/*untuk update data
			$pid = 2;
			// Add product  array to database
			if (move_uploaded_file($tempFile,$targetFile)){
				$newFileNamedb = $newFileName.',';
				try {
					$results = "SELECT filename, pid FROM `myproducts` WHERE pid = $pid";
					// $results->bindParam(1,$pid);
					// $results->execute();
					$query =	$this->db->query($results);
				} catch (Exception $e) {
					echo "Data could not be retrieved from the database.";
					exit;
				}
				 // $p = $results->fetch(PDO::FETCH_ASSOC);
				 $p = $query->result_array();
				 $p_array = $p[0]['filename'];
				 if($p_array != ''){
					$p_array2 = $p_array.$newFileNamedb;
				 } else {
					 $p_array2 = $newFileNamedb;
				 }


				try{
				$stmt = "UPDATE `myproducts`
								SET  filename = ?
								WHERE pid = $pid";
					// $stmt->execute(array($p_array2, $pid));
				$this->db->query($stmt, array($p_array2));
				// $this->db->update($this->tableName, $data, array($this->tableName.'.'.$this->fieldPrefix."_id" => $id));
					}

					catch(PDOException $e)
							{
								echo $sql . "<br>" . $e->getMessage();
								exit();
						}
			} else {

			//upload failed, echo back negative response to dropzone.js
			$this->output->set_header("HTTP/1.0 400 Bad Request");
			echo "Error uploading file";

			}

			#untuk update data
		}

	}


	//Untuk proses upload foto
	function proses_upload(){

        $config['upload_path']   = FCPATH.'public/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $a = $this->load->library('upload',$config);
        $b = $this->upload->do_upload('userfile');
        $c = $this->upload->data();
        var_dump($a);
        var_dump($b);
        var_dump($c);
			print_r($config);
        if($this->upload->do_upload('userfile')){
        	$token = $this->input->post('token_foto');
        	$nama	 = $this->upload->data('file_name');

			print_r($a);
			print_r($config);
			print_r($token);
			print_r($nama['file_name']);
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
*/
	function countNotifMessage(){
		$this->load->model('m_message', "", TRUE);
		$data = $this->m_message->countNotif();
		return $data;
	}

}
