<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    
    $this->load->library( array('session', 'form_validation', 'session','template'));

    $this->load->model('users', 'user');

    $this->load->helper(array('url'));
  }

  public function index()
  {

    $this->form_validation->set_rules('username', 'Username / Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == TRUE)
    {
      $user = $this->user->get_admin_login();

      if( $user != FALSE)
      {
        if ( password_verify($this->input->post('password'), $user->password) ) 
        {
              $user_session = array(
                // 'rtlh_login' => TRUE,
                'ID' => $user->id_user,
                'ADMIN' => (Object) array(
                  'id_user' => $user->id_user,
                  'nama' => $user->nama,
                  'telepon' => $user->no_telp,
                  'email' => $user->email,
                  'alamat' => $user->alamat,
                  'username' => $user->username,
                  'level' => $user->level,

                )
              );  

              $this->session->set_userdata( $user_session );

          if( $this->input->post('from_url') != '' )
          {
            redirect($this->input->post('from_url'));
          } else {
            redirect(base_url('home'));
          }
        } else {
          $this->template->alert(
            ' Maaf! Kombinasi Username / E-Mail dengan password anda tidak valid.', 
            array('type' => 'danger','icon' => 'warning')
          );
        }
      } else {
        $this->template->alert(
          ' Maaf! Kombinasi Username / E-Mail dengan password anda tidak valid.', 
          array('type' => 'danger','icon' => 'warning')
        );
      }
    }

    $this->data = array(
      'title' => "Login Sistem Monitoring Pekerjaan", 
    );

    $this->load->view('Test/login', $this->data);
  }

  public function Keluar()
  {
    $this->session->sess_destroy();

    redirect(base_url("login?from_url=".$this->input->get('from_url')));
  }

}