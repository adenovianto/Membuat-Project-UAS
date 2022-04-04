<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('Login');
        }
    }
    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_dashhboard');
        $this->load->view('v_footer');
    }
}
