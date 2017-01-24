<?php

class M_login extends CI_Model {

    private $table = "user";

    // function cek($username, $password) {
    //     $this->db->where("u_name", $username);
    //     $this->db->where("u_paswd", $password);
    //     return $this->db->get("user");
    // }

    public function cek($username, $password){
        
        $salt       = 's1l4l4h1';
        $usr        = mysql_real_escape_string($username);
        $var_pass   = mysql_real_escape_string($password);
        $pass       = sha1($salt.md5($var_pass));
                       
        $check_login = $this->db->get_where('user', array(
                'username' => $usr,
                'password' => $pass
            ));
            
        if ($check_login->num_rows() > 0)
        {
            foreach ($check_login->result() as $checkLog) {
                $sess_data['logged_in'] = 'Masuk';
                $sess_data['user_id'] = $checkLog->id;
                $sess_data['is_admin'] = $checkLog->is_admin;
                $sess_data['email'] = $checkLog->email;
                $sess_data['username'] = $checkLog->username;
                $sess_data['password'] = $checkLog->password;
                $sess_data['created_at'] = $checkLog->created_at;
                $this->session->set_userdata($sess_data);
                
                //create login log
                $data = array(
                        'user_id' => $checkLog->id,
                        'date' => date('Y-m-d H:i:s')
                        );
                $this->db->insert('log_login', $data);
            }
            
            header('location:'. base_url().'dashboard');
        }
        else
        {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:'. base_url());
        }

    }
    /*
    function semua() {
        return $this->db->get("user");
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
        $q_check_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));
        if (count($q_check_login->result()) > 0) {
            foreach ($q_check_login->result() as $qck) {
                foreach ($q_check_login->result() as $qad) {
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

    function simpan($info) {
        $this->db->insert("user", $info);
    }

    function hapus($kode) {
        $this->db->where("u_id", $kode);
        $this->db->delete("user");
    }

    function save($data) {
      //tablenya diganti dulu
        $data['status']     = 1;
        $data['created_at'] = date('Y-m-d H:i:s');
        // print_r($data);
        $this->db->insert("login", $data);
    }
    */

}
