<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Website extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->check_login();
        // if ($this->session->userdata('id_role') != "2") {
        //     redirect('', 'refresh');
        // }
        $this->load->model('main_model');
    }

    public function index()
    {
        // $data = konfigurasi('Dashboard');
        $this->load->view('main/v_main');
    }

    public function kirim_email()
    {
        $this->main_model->kirim_email();
        echo '<script>alert("Berhasil Dikirm")</script>';
        redirect('website');
    }
}
