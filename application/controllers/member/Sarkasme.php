<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Sarkasme extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
        $this->load->model('sarkasme_model');
    }

    public function hasil($id)
    {
        $data = konfigurasi('Dashboard');
        $data['id_anotator'] = $id;
        $this->load->view('member/layouts/_header', $data);
        $this->load->view('member/v_sarkasme', $data);
        $this->load->view('member/layouts/_footer', $data);
    }

    function get_data_tweet()
    {
        $label = 'anotator' . $_POST['anotator'];
        $list = $this->sarkasme_model->get_datatables($_POST['anotator']);
        $data = array();
        foreach ($list as $field) {
            $row = array();
            $row[] = $field->id;
            $row[] = $field->tweet;
            $row[] = $field->author;
            $row[] = $field->dnt_tweet;
            $row[] = $field->reply;
            $row[] = $field->responder;
            $row[] = $field->dnt_reply;
            $row[] = $field->$label;
            $row[] = $_POST['anotator'];
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->sarkasme_model->count_all($_POST['anotator']),
            "recordsFiltered" => $this->sarkasme_model->count_filtered($_POST['anotator']),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
