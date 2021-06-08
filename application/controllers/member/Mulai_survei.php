<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Mulai_survei extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
        $this->load->model('mulai_survei_model');
    }

    public function list($id)
    {

        $data = konfigurasi('Dashboard');
        $data['id_anotator'] = $id;
        if ($data['id_anotator'] == 1) {
            $data['baru_survei'] = $this->mulai_survei_model->baru_survei1(5, 0)->result();
        } else if ($data['id_anotator'] == 2) {
            $data['baru_survei'] = $this->mulai_survei_model->baru_survei2(5, 0)->result();
        } else {
            $data['baru_survei'] = $this->mulai_survei_model->baru_survei3(5, 0)->result();
        }

        $this->load->view('member/layouts/_header', $data);
        $this->load->view('member/v_mulai_survei', $data);
        $this->load->view('member/layouts/_footer', $data);
    }

    public function get_data_tweet()
    {
        // $this->anotator = $_POST['anotator'];
        $list = $this->mulai_survei_model->get_datatables($_POST['anotator']);
        $data = array();
        foreach ($list as $field) {
            $row = array();
            // $row[] = $field->id;
            $row[] = $field->tweet;
            // $row[] = $field->author;
            // $row[] = $field->dnt_tweet;
            $row[] = $field->reply;
            // $row[] = $field->responder;
            // $row[] = $field->dnt_reply;
            $row[] = '<a href="/tweet/member/mulai_survei/non_sarkasme/' . $field->id . '?anotator=' . $_POST['anotator'] . '" class="btn btn-outline-success btn-xs ml-2"><b class="fa fa-check"></b> Non-Sarkasme</a>
            <a href="/tweet/member/mulai_survei/sarkasme/' . $field->id . '?anotator=' . $_POST['anotator'] . '" class="btn btn-outline-danger btn-xs ml-2">
            <b class="fa fa-times"></b> Sarkasme</a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mulai_survei_model->count_all($_POST['anotator']),
            "recordsFiltered" => $this->mulai_survei_model->count_filtered($_POST['anotator']),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function non_sarkasme($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 1) {
            $this->mulai_survei_model->non_sarkasme1($id);
        } else if ($anot == 2) {
            $this->mulai_survei_model->non_sarkasme2($id);
        } else {
            $this->mulai_survei_model->non_sarkasme3($id);
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

    public function sarkasme($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 1) {
            $this->mulai_survei_model->sarkasme1($id);
        } else if ($anot == 2) {
            $this->mulai_survei_model->sarkasme2($id);
        } else {
            $this->mulai_survei_model->sarkasme3($id);
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

    public function ulangi($id)
    {
        $anot = $_GET['anotator'];
        if ($anot == 1) {
            $this->mulai_survei_model->ulangi1($id);
        } else if ($anot == 2) {
            $this->mulai_survei_model->ulangi2($id);
        } else {
            $this->mulai_survei_model->ulangi3($id);
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
