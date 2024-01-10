<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function dashboard() {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');

    }
    public function chat() {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        $this->load->view('header');
        $this->load->view('Chat');
        $this->load->view('footer');

    }
}
