<?php

class M_menu extends CI_Model {

    private $table = "parent_menu";

    /*
    function cek($username, $password) {
        $this->db->where("u_name", $username);
        $this->db->where("u_paswd", $password);
        return $this->db->get("user");
    }





    function save_edit_parent($id, $info) {
        $this->db->where("u_id", $id);
        $this->db->update("user", $info);
    }


    */
    function getAll() {
        $this->db->from("parent_menu");
        $this->db->order_by("id", "ASC");
        $query = $this->db->get();
        return $query->result();
    }


    function save_new_parent($data) {
        // $data['status']     = 1;
        $data['created_at'] = date('Y-m-d H:i:s');

        $this->db->insert("parent_menu", $data);

        if($this->db->affected_rows() == 1 ){
            redirect('menu');
        }else{
            $this->session->set_flashdata('result_notif', 'Data not save to DB');
            header('location:'. base_url('menu'));
        }
    }


    function save_new_menu($data) {
        $data['created_at'] = date('Y-m-d H:i:s');

        $this->db->insert("menu", $data);

        if($this->db->affected_rows() == 1 ){
            redirect('menu/list_menu');
        }else{
            $this->session->set_flashdata('result_notif', 'Data not save to DB');
            header('location:'. base_url('menu/list_menu'));
        }

    }

    function getByidParent($id) {
        $this->db->from("parent_menu");
        $this->db->where("id", $id);
        $query = $this->db->get();

        if($this->db->affected_rows() == 1 ){
            return $query->result();
        }else{
            $this->session->set_flashdata('result_notif', 'There is No Data');
            header('location:'. base_url('menu'));
        }

    }

    function getByidMenu($id) {
      //   $this->db->from("parent_menu");
      //   $this->db->where("id", $id);
      //   $query = $this->db->get();
        $this->db->select("menu.id, menu.image image, menu.name name, menu.description, parent_menu.id id_parrent, parent_menu.name parent_menu, menu.created_at created_at");
        $this->db->from("menu");
        $this->db->join("parent_menu", "menu.id_parent = parent_menu.id", "INNER");
        $this->db->order_by("parent_menu.id", "ASC");
        $this->db->where("menu.id" , $id);
        // $this->db->limit($offset,$start);
        $query = $this->db->get();
        $array = $query->result_array();
        // $query->free_result();
        unset($query);
        if($this->db->affected_rows() == 1 ){
            return $array;
        }else{
            $this->session->set_flashdata('result_notif', 'There is No Data');
            header('location:'. base_url('menu/list_menu'));
        }

    }

    function update_parent($data, $id) {
        $data['updated_at'] = date('Y-m-d H:i:s');

        $this->db->where("id", $id);
        $this->db->update("parent_menu", $data);

        if($this->db->affected_rows() == 1 ){
            redirect('menu/');
        }else{
            $this->session->set_flashdata('result_notif', 'Data not Updated');
            header('location:'. base_url('menu'));
        }
    }

    function update_menu($data, $id) {
        $data['updated_at'] = date('Y-m-d H:i:s');

        $this->db->where("id", $id);
        $this->db->update("menu", $data);

        if($this->db->affected_rows() == 1 ){
            redirect('menu/list_menu');
        }else{
            $this->session->set_flashdata('result_notif', 'Data not Updated');
            header('location:'. base_url('menu/list_menu'));
        }
    }

    function del_parent($id) {
        $this->db->where("id", $id);
        $this->db->delete("parent_menu");

        if($this->db->affected_rows() == 1 ){
            redirect('menu/');
        }else{
            $this->session->set_flashdata('result_notif', 'Data not Deleted');
            header('location:'. base_url('menu'));
        }
    }

    function del_menu($id) {
        $this->db->where("id", $id);
        $this->db->delete("menu");

        if($this->db->affected_rows() == 1 ){
            redirect('menu/list_menu');
        }else{
            $this->session->set_flashdata('result_notif', 'Data not Deleted');
            header('location:'. base_url('menu/list_menu'));
        }
    }

    function getParentMenu() {
        $this->db->from("parent_menu");
        $this->db->order_by("id", "ASC");
        $query = $this->db->get();
        $data = $query->result();

        $listmenu = '<select class="form-control" name="id_parent" id="id_parent" required>';
        $listmenu .= '<option value="" disabled selected>Select Parent Menu</option>';
        foreach ($data as $value ) {
            $listmenu .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        $listmenu .= '</select>';

        return $listmenu;
     }

    function getParentMenuid($id) {
        $this->db->from("parent_menu");
        $this->db->order_by("id", "ASC");
        $query = $this->db->get();
        $data = $query->result();

        $listmenu = '<select class="form-control" name="id_parent" id="id_parent" required>';
        foreach ($data as $value ) {
          $role = $value->id == $id ? 'selected=' : '';
            $listmenu .= '<option value="'.$value->id.'" '.$role.'>'.$value->name.'</option>';
        }
        $listmenu .= '</select>';

        return $listmenu;
     }

    function getSubMenu($id) {
        $this->db->from("menu");
        $this->db->order_by("id", "ASC");
        $this->db->where("id_parent", $id);
        $query = $this->db->get();
        $data = $query->result();
      //   var_dump($data);
        $listmenu = '<select class="form-control" name="submenu_id" id="submenu_id" required>';
        foreach ($data as $value ) {
          $listmenu .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        $listmenu .= '</select>';
      //   echo $listmenu;
        return $listmenu;
     }

    function getAllmenu(){
      $this->db->select("menu.id, menu.image image, menu.name name, parent_menu.name parent_menu, menu.created_at created_at");
      $this->db->from("menu");
      $this->db->join("parent_menu", "menu.id_parent = parent_menu.id", "INNER");
      $this->db->order_by("parent_menu.id", "ASC");
      // $this->db->limit($offset,$start);
      $query = $this->db->get();
      $array = $query->result_array();
      // $query->free_result();
      unset($query);
      return $array;
   }

}
