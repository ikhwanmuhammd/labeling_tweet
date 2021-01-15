<?php

defined('BASEPATH') or exit('No direct script access allowed');


class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('user_model');
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['user'] = $this->user_model->user()->result();
        $data['anotator'] = $this->user_model->anotator()->result();
        $data['gabung'] = $this->user_model->gabung()->result();
        $this->template->load('layouts/template', 'admin/v_user', $data);
    }

    public function simpan_anotator()
    {
        $this->user_model->tambah_anotator();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/user');
    }

    public function simpan_user()
    {
        $this->user_model->tambah_user();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/user');
    }

    public function konfirmasi($id)
    {
        $this->user_model->konfirm_email($id);
        $this->session->set_flashdata('flash', 'Dikonfirmasi');
        redirect('admin/user');
    }

    public function batal_minta($id)
    {
        $this->user_model->batal_minta($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/user');
    }


    public function batal_gabung($id)
    {
        $this->user_model->batal_gabung($id);
        $this->session->set_flashdata('flash', 'Batal Gabung');
        redirect('admin/user');
    }

    public function hapus_anotator($id)
    {
        $this->user_model->hapus_anotator($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/user');
    }

    public function hapus_user($id)
    {
        $this->user_model->hapus_user($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/user');
    }
}
