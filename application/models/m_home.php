<?php

class M_home extends CI_Model {

   function getContent_Home($id)
   {
      $sql = "SELECT a.*, c.image submenuImg
               FROM contents a
               INNER JOIN (
               SELECT id_parent, submenu_id , max(publish_at) publish
               FROM contents
               WHERE submenu_id != 2
               GROUP BY id_parent, submenu_id
               ) b ON b.id_parent = a.id_parent AND b.submenu_id = a.submenu_id AND b.publish = a.publish_at
               inner join menu c ON c.id=a.submenu_id
               where a.id_parent = $id";
      $query = $this->db->query($sql);
      $result = $query->result();
      if($this->db->affected_rows() > 0 ){
         return $result;
      }
   }

   function getHeaderContent_Home($id)
   {
      $sql = "SELECT a.*, c.image
         FROM contents a
         inner join menu c ON c.id=a.submenu_id
         where a.submenu_id = 2 AND a.id_parent = $id AND a.status = 1 AND a.is_delete = 0
         order by a.publish_at DESC
         limit 1";
      $query = $this->db->query($sql);
      $result = $query->result();
      if($this->db->affected_rows() == 1 ){
         return $result;
      }
   }

   /*
   function create_jsonMenu() {
      $sql = "SELECT a.id, a.name, a.background, b.id idsubmenu, b.name submenu, b.image imagemenu
               FROM parent_menu a
               INNER JOIN menu b ON b.id_parent = a.id";
      $query = $this->db->query($sql);
      $result = $query->result();

      $data = array();
      if($this->db->affected_rows() > 0 ){
          foreach ($result as $menuValue) {
             $data[$menuValue->id][] = $menuValue;
         }
         foreach ($data as $key => $value) {
             $dataJson = $data[$key];
            $json = json_encode($dataJson);
            file_put_contents('./public/menujson_'.$key.'.json', $json, FILE_APPEND | LOCK_EX);
         }

      }
   }

   */
   //  private $table = "user";

/*
    function cek($username, $password) {
        $this->db->where("u_name", $username);
        $this->db->where("u_paswd", $password);
        return $this->db->get("user");
    }

    function getAll() {
        $this->db->from("user");
        $this->db->order_by("id", "DESC");
        $query = $this->db->get();
        return $query->result();
    }

    function getByid($id) {
        $this->db->from("user");
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->result();
    }

    function cekKode($kode) {
        $this->db->where("u_name", $kode);
        return $this->db->get("user");
    }

    function cekId($kode) {
        $this->db->where("u_id", $kode);
        return $this->db->get("user");
    }

    function getLoginData($usr, $psw) {
        $u = mysql_real_escape_string($usr);
        $p = md5(mysql_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = 'aingLoginWebYeuh';
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['group'] = $qad->group;
                    $sess_data['rid'] = $qad->rid;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'login');
        }
    }

    function update($id, $info) {
        $this->db->where("u_id", $id);
        $this->db->update("user", $info);
    }

    function hapus($kode) {
        $this->db->where("u_id", $kode);
        $this->db->delete("user");
    }

    function save($data) {
        $data['status']     = 1;
        $data['created_at'] = date('Y-m-d H:i:s');

        $this->db->insert("user", $data);
    }
    */

}
