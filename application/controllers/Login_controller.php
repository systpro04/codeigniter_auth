<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('url', 'html', 'form'));
        $this->user_id = $this->session->userdata('user_id');
    }


    public function index()
    {
        $this->load->view('auth/login');
    }
    public function post_login()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Invalid user credentials');

        if ($this->form_validation->run() === FALSE) {
            redirect('login');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),

            );

            $check = $this->login_model->auth_check($data);

            if ($check != false) {

                $user = array(
                    'user_id' => $check->id,
                    'email' => $check->email,
                    'first_name' => $check->first_name,
                    'last_name' => $check->last_name
                );

                $this->session->set_userdata($user);

                redirect(base_url('dashboard'));
            }

            $this->load->view('auth/login');
        }

    }
    public function post_register()
    {

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('auth/register');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'contact_no' => $this->input->post('contact_no'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),

            );
       
            $check = $this->login_model->insert_user($data);

            if ($check != false) {

                $user = array(
                    'user_id' => $check,
                    'email' => $this->input->post('email'),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                );
            }

            $this->session->set_userdata($user);

            redirect(base_url('dashboard'));
        }


    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}