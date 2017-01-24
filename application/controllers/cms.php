<?php
/*
* Firman Silalahi
* firman.silahi@gmail.com
* jan 2017
*/
  class Cms extends CI_Controller {

  function __construct() {
      parent::__construct();
      session_start();
      $this->load->model(array('m_login'));
      if ($this->session->userdata('logged_in')) {
          redirect('dashboard');
      }
  }

  function index() {
      $this->load->view('v_login');
  }

  function proses() {
      $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
      $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');

      if ($this->form_validation->run() == FALSE) {
          $this->load->view('v_login');
      }else {

          $usr    = $this->input->post('username');
          $psw    = $this->input->post('password');
          $u      = mysql_real_escape_string($usr);
          $p      = mysql_real_escape_string($psw);

          $cek    = $this->m_login->cek($u, $p);

          // if ($cek->num_rows() > 0) {
          //     //login berhasil, buat session
          //     foreach ($cek->result() as $qad) {
          //         $sess_data['u_id'] = $qad->u_id;
          //         $sess_data['nama'] = $qad->nama;
          //         $sess_data['u_name'] = $qad->u_name;
          //         $sess_data['role'] = $qad->role;
          //         $this->session->set_userdata($sess_data);
          //     }
          //     redirect('dashboard');
          // } else {
          //     $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
          //     redirect('login');
          // }
      }
  }

  function logout() {
      $this->session->sess_destroy();
      redirect('cms');
  }
}
