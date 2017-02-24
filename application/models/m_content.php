<?php

class M_content extends CI_Model {

    private $table = "parent_menu";

    function action_save($data) {
        $datas['create_at']   = date('Y-m-d H:i:s');
        $datas['user_id']     = $this->session->userdata('user_id');
        $datas['title']       = $data['title'];
        $datas['summary']     = $data['summary'];
        $datas['description'] = $data['description'];
        $datas['id_parent']   = $data['id_parent'];
        $datas['submenu_id']  = $data['submenu_id'];
        $datas['content']      = $data['editor'];
        $datas['status']      = 0;

        $this->db->insert("contents", $datas);
       if($this->db->affected_rows() == 1 ){
           redirect('contents');
       }else{
           $this->session->set_flashdata('result_notif', 'Data not save');
           header('location:'. base_url('contents/newContent'));
       }
    }


    function getListContent()
    {
      $this->db->select("id_content id, title, contents.summary, user.username, contents.id_parent, parent_menu.name parent_menu, submenu_id, menu.name sub_menu, create_at, contents.update_at, contents.status");
      $this->db->from("contents");
      $this->db->join("user", "user.id = contents.user_id", "INNER");
      $this->db->join("parent_menu", "parent_menu.id=contents.id_parent", "INNER");
      $this->db->join("menu", "menu.id=contents.submenu_id", "INNER");
      $this->db->where("contents.is_delete = 0");
      $this->db->order_by("contents.status", "DESC");
      $this->db->order_by("contents.create_at", "DESC");
      $this->db->order_by("contents.update_at", "DESC");
      $query = $this->db->get();
      $array = $query->result_array();

      unset($query);
      if($this->db->affected_rows() >= 1 ){
          return $array;
      }else{
          $this->session->set_flashdata('result_notif', 'There is No Data');
          header('location:'. base_url('contents/newContent'));
      }
    }

    function get_contentImage($id)
    {
       $results = "SELECT id_content, title, image FROM contents where id_content = $id and is_delete = 0 LIMIT 1  ";
       $query = $this->db->query($results);

       if($this->db->affected_rows() < 1 ){
          $result = [];
          return json_encode($result);
       }
      $product = $query->result_array();
      if($product[0]['image'] != ''){
         $str= "".$product[0]['image']."";
         $str = rtrim($str,',');
         $arr=explode(",",$str);

         foreach($arr as $file){ //get an array which has the names of all the files and loop through it
            $result[] = array(
              "name" => $file,
              "size" => filesize("public/content/".$file),
           );
         }
         //
         header("Content-Type: application/json", true);
         return json_encode($result); // now you have a json response which you can use in client side
      }

   }

   function getContentUploadById($id)
   {
      $this->db->select("id_content, title, image");
      $this->db->from("contents");
      $this->db->where("is_delete = 0");
      $this->db->where("id_content", $id);
      $this->db->limit(1);
      $query = $this->db->get();
      $array = $query->result_array();
      unset($query);
      if($this->db->affected_rows() == 1 ){
          return $array;
      }else{
          $this->session->set_flashdata('result_notif', 'There is No Data');
          header('location:'. base_url('contents/listContent'));
      }

   }

   function updateImgById($id, $data)
   {
      $this->db->where('id_content', $id);
      $this->db->update('contents', $data);

      if($this->db->affected_rows() == 1 ){
          redirect('contents/listContent');
      }else{
          $this->session->set_flashdata('result_notif', 'Data not Updated');
          header('location:'. base_url('contents/listContent'));
      }
   }

   function unlinkImgById($id, $data)
   {
      $sql = "UPDATE `contents` SET image=REPLACE(image,'".$data."','')";
      $this->db->query($sql);

      if($this->db->affected_rows() == 1 ){
          $result = "UPDATED successfully";
      }else{
         $result = "UPDATED not successfull";
      }
      return $result;
   }

   function set_publish($id)
   {
      $data['publish_at'] = date('Y-m-d H:i:s');
      $data['status'] = 1;

      $this->db->where("id_content", $id);
      $this->db->update("contents", $data);

      if($this->db->affected_rows() == 1 ){
          redirect('contents/listContent');
      }else{
          $this->session->set_flashdata('result_notif', 'Data not Updated');
          header('location:'. base_url('contents/listContent'));
      }
   }

   function set_Notpublish($id)
   {
      $data['status'] = 0;

      $this->db->where("id_content", $id);
      $this->db->update("contents", $data);

      if($this->db->affected_rows() == 1 ){
          redirect('contents/listContent');
      }else{
          $this->session->set_flashdata('result_notif', 'Data not Updated');
          header('location:'. base_url('contents/listContent'));
      }
   }

   function getContentById($id)
   {
     $this->db->select("id_content id, title, contents.summary, contents.description, contents.content, user.username, contents.id_parent, parent_menu.name parent_menu, submenu_id, menu.name sub_menu, create_at, contents.update_at, contents.status");
     $this->db->from("contents");
     $this->db->join("user", "user.id = contents.user_id", "INNER");
     $this->db->join("parent_menu", "parent_menu.id=contents.id_parent", "INNER");
     $this->db->join("menu", "menu.id=contents.submenu_id", "INNER");
     $this->db->where("id_content", $id);
     $this->db->where("is_delete = 0");

     $query = $this->db->get();
     $array = $query->result_array();

     unset($query);
     if($this->db->affected_rows() == 1 ){
         return $array;
     }else{
         $this->session->set_flashdata('result_notif', 'There is No Data');
         header('location:'. base_url('contents/newContent'));
     }
   }

   function save_editContent($data)
   {
      $datas['update_at']   = date('Y-m-d H:i:s');
      $datas['title']       = $data['title'];
      $datas['summary']     = $data['summary'];
      $datas['description'] = $data['description'];
      $datas['id_parent']   = $data['id_parent'];
      $datas['submenu_id']  = $data['submenu_id'];
      $datas['content']     = $data['editor'];

      $this->db->where("id_content", $data[id]);
      $this->db->update("contents", $datas);

     if($this->db->affected_rows() == 1 ){
         redirect('contents');
     }else{
         $this->session->set_flashdata('result_notif', 'Data not save');
         header('location:'. base_url('contents/newContent'));
     }

   //   $data['updated_at'] = date('Y-m-d H:i:s');
     //
   //   $this->db->where("id", $id);
   //   $this->db->update("parent_menu", $data);

   }

   function del_content($id)
   {
      $data['is_delete'] = 1;
      $data['update_at'] = date('Y-m-d H:i:s');

      $this->db->where("id_content", $id);
      $this->db->update("contents", $data);

      if($this->db->affected_rows() == 1 ){
          redirect('contents/listContent');
      }else{
          $this->session->set_flashdata('result_notif', 'Data cannot deleted');
          header('location:'. base_url('contents/listContent'));
      }
   }

   function save_contact($data)
   {
      $this->db->update("contact_us", $data);

      if($this->db->affected_rows() == 1 ){
         $this->db->select("*");
         $this->db->from("contact_us");
         $query = $this->db->get();
         $array = $query->result();

         $data = array();
         foreach ($array as $value) {
            $data['contact'] = $value;
         }

         $json = json_encode($data);
         $fp = fopen('./public/contact.json', 'w');
         fwrite($fp, $json);

         $this->session->set_flashdata('result_notif', 'Contact Updated');
         header('location:'. base_url('contents/contact'));
      }else{
          $this->session->set_flashdata('result_notif', 'Data cannot Update');
          header('location:'. base_url('contents/contact'));
      }
   }

   function getContactUs()
   {
      $this->db->select("*");
      $this->db->from("contact_us");
      $query = $this->db->get();
      $array = $query->result();

      return $array;
   }

}
