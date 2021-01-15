<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Mulai_posnet extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
        $this->load->model('mulai_posnet_model');
    }

    public function list($id)
    {

        $data = konfigurasi('Dashboard');
        $data['id_anotator'] = $id;
        $data['baru_survei'] = $this->mulai_posnet_model->baru_survei4(5, 0)->result();

        $this->load->view('member/layouts/_header', $data);
        $this->load->view('member/v_mulai_posnet', $data);
        $this->load->view('member/layouts/_footer', $data);
    }

    public function get_data_tweet()
    {
        // $this->anotator = $_POST['anotator'];
        $list = $this->mulai_posnet_model->get_datatables($_POST['anotator']);
        $data = array();
        foreach ($list as $field) {
            $row = array();
            $row[] = $field->id;
            $row[] = $field->tweet;
            $row[] = '<a href="/tweet/member/mulai_posnet/positif/' . $field->id . '?anotator=' . $_POST['anotator'] . '" class="btn btn-outline-success btn-xs ml-2"><b class="fa fa-check"></b> Positif</a>
            <a href="/tweet/member/mulai_posnet/negatif/' . $field->id . '?anotator=' . $_POST['anotator'] . '" class="btn btn-outline-danger btn-xs ml-2"><b class="fa fa-times"></b> Negatif</a>
            <a href="/tweet/member/mulai_posnet/netral/' . $field->id . '?anotator=' . $_POST['anotator'] . '" class="btn btn-outline-warning btn-xs ml-2"><b class="fa fa-minus"></b> Netral</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mulai_posnet_model->count_all($_POST['anotator']),
            "recordsFiltered" => $this->mulai_posnet_model->count_filtered($_POST['anotator']),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function positif($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 4) {
            $this->mulai_posnet_model->positif4($id);
        }
        $this->session->set_flashdata('pesan', 'Berhasil Menanggapi');
        if ($anot == 4) {
            redirect('/member/mulai_posnet/list/4');
        }
    }

    public function negatif($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 4) {
            $this->mulai_posnet_model->negatif4($id);
        }
        $this->session->set_flashdata('pesan', 'Berhasil Menanggapi');
        if ($anot == 4) {
            redirect('/member/mulai_posnet/list/4');
        }
    }
    public function netral($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 4) {
            $this->mulai_posnet_model->netral4($id);
        }
        $this->session->set_flashdata('pesan', 'Berhasil Menanggapi');
        if ($anot == 4) {
            redirect('/member/mulai_posnet/list/4');
        }
    }

    public function ulangi($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 1) {
            $this->mulai_posnet_model->ulangi1($id);
        } else if ($anot == 2) {
            $this->mulai_posnet_model->ulangi2($id);
        } else {
            $this->mulai_posnet_model->ulangi3($id);
        }
        $this->session->set_flashdata('pesan', 'Berhasil Menanggapi');
        if ($anot == 1) {
            redirect('/member/mulai_survei/list/1');
        } else if ($anot == 2) {
            redirect('/member/mulai_survei/list/2');
        } else {
            redirect('/member/mulai_survei/list/3');
        }
    }
}
