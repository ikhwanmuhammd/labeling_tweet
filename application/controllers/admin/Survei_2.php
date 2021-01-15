<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Survei_2 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('survei_model_2');
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['tweet'] = $this->survei_model_2->data_tweet()->result();
        $data['anotator'] = $this->survei_model_2->anotator()->result();

        $this->template->load('layouts/template', 'admin/v_survei_2', $data);
    }

    function get_data_survei_2()
    {
        $list = $this->survei_model_2->get_datatables();
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
            $row[] = '2';
            $row[] = $field->anotator2;
            $row[] = '<a href="/tweet/admin/survei_2/ulangi/' . $field->id . '" class="btn btn-warning btn-sm" id="tombol_ulang" data-toggle="tooltip" data-placement="top" title="Ulangi"><i class="fas fa-redo fa-sm"></i></a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->survei_model_2->count_all(),
            "recordsFiltered" => $this->survei_model_2->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function export()
    {
        $file_name = 'Data_survei_2_' . date('Ymdhms') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/csv;");

        // get data 
        $data_labeling = $this->survei_model_2->fetch_data();

        // file creation 
        $file = fopen('php://output', 'w');

        $header = array("ID", "Tweet", "Author", "Date&Time Tweet", "Reply", "Responder", "Date&Time Reply", "Label Anotator 2", "Date&Time Label");
        fputcsv($file, $header);
        foreach ($data_labeling->result_array() as $key => $value) {
            fputcsv($file, $value);
        }
        fclose($file);
        exit;
    }

    public function ulangi($id)
    {
        $this->survei_model_2->ulangi($id);
        $this->session->set_flashdata('flash', 'Mengulang Tanggapan');
        redirect($_SERVER['HTTP_REFERER']);
    }
}
