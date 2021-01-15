<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('home_model');
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['anotator'] = $this->home_model->anotator()->result();

        //jumlah data
        $data['jml_tweet'] = $this->home_model->data_tweet()->num_rows();
        $data['jml_tweet2'] = $this->home_model->data_tweet2()->num_rows();
        $data['jml_anotator'] = $this->home_model->anotator()->num_rows();
        $data['jml_user'] = $this->home_model->user()->num_rows();
        $data['jml_survei1'] = $this->home_model->survei1()->num_rows();
        $data['jml_survei2'] = $this->home_model->survei2()->num_rows();
        $data['jml_survei3'] = $this->home_model->survei3()->num_rows();
        $data['jml_survei4'] = $this->home_model->survei4()->num_rows();
        $data['jml_ingin_gabung'] = $this->home_model->ingin_gabung()->num_rows();

        $this->template->load('layouts/template', 'admin/v_home', $data);
    }
}
