<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $this->load->view('member/layouts/_header', $data);
        $this->load->view('member/v_home');
        $this->load->view('member/layouts/_footer');
    }
}
