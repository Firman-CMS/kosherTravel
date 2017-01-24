<?php

class M_message extends CI_Model {

    private $table = "messages";

   function getAllmessages() {
      $this->db->from("messages");
      $this->db->where("status = 1");
      $this->db->order_by("id", "DESC");
      $query = $this->db->get();

      return $query->result();
   }

   function getTrashmessages() {
      $this->db->from("messages");
      $this->db->where("status = 0");
      $this->db->order_by("id", "DESC");
      $query = $this->db->get();

      return $query->result();
   }

   function getByid($id) {
        $this->db->where("id", $id);
        $result = $this->db->get("messages");

        if ($result->num_rows() > 0){
         return $result->result();
        }
    }
    /*
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
    */
    function update($id, $info) {
        $this->db->where("u_id", $id);
        $this->db->update("user", $info);
    }

   function updateAsread($id)
   {
      $this->db->set('notif', 0, FALSE);
      $this->db->where('id', $id);
      $this->db->update('messages');
   }

   function delete($kode){
     $this->db->where("u_id", $kode);
     $this->db->delete("user");
   }

   function save($data) {
      $data['status']     = 1;
      $data['notif']      = 1;
      $data['created_at'] = date('Y-m-d H:i:s');

      $this->db->insert("messages", $data);
   }

   function countNotif() {
     $this->db->select("id");
     $this->db->where("notif = 1");
     return $this->db->count_all_results("messages");
   }

}
