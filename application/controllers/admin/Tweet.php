<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Tweet extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('tweet_model');
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['tweet'] = $this->tweet_model->data_tweet()->result();
        $data['anotator'] = $this->tweet_model->anotator()->result();
        $this->template->load('layouts/template', 'admin/v_tweet', $data);
    }

    function get_data_tweet()
    {
        $list = $this->tweet_model->get_datatables();
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
            $row[] = '<a href="tweet/hapus_tweet/' . $field->id . '" class="btn btn-danger btn-sm" id="tombol_hapus" data-toggle="tooltip" data-placement="top" title="Hapus Tweet"><i class="fa fa-trash fa-sm"></i></a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->tweet_model->count_all(),
            "recordsFiltered" => $this->tweet_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function export()
    {
        $file_name = 'Data_all_labeling_' . date('Ymdhms') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/csv;");

        // get data 
        $data_labeling = $this->tweet_model->fetch_data();

        // file creation 
        $file = fopen('php://output', 'w');

        $header = array("ID", "Tweet", "Author", "Date&Time Tweet", "Reply", "Responder", "Date&Time Reply");
        fputcsv($file, $header);
        foreach ($data_labeling->result_array() as $key => $value) {
            fputcsv($file, $value);
        }
        fclose($file);
        exit;
    }


    public function simpan_tweet()
    {
        $this->tweet_model->tambah_data_tweet();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('admin/tweet');
    }

    public function edit_anotator()
    {
        $this->tweet_model->ubah_anotator();
        $this->session->set_flashdata('flash', 'Diedit');
        redirect('admin/tweet');
    }

    public function hapus_tweet($id)
    {
        $this->tweet_model->hapus_tweet($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/tweet');
    }
}
