<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Posnet extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
        $this->load->model('posnet_model');
    }

    public function hasil($id)
    {
        $data = konfigurasi('Dashboard');
        $data['id_anotator'] = $id;
        $this->load->view('member/layouts/_header', $data);
        $this->load->view('member/v_posnet', $data);
        $this->load->view('member/layouts/_footer', $data);
    }

    function get_data_tweet()
    {
        $label = 'anotator' . $_POST['anotator'];
        $list = $this->posnet_model->get_datatables($_POST['anotator']);
        $data = array();
        foreach ($list as $field) {
            $row = array();
            $row[] = $field->id;
            $row[] = $field->tweet;
            if ($field->$label == 'positif') {
                $row[] = '<span class="badge badge-success">Positif</span>';
            } else if ($field->$label == 'negatif') {
                $row[] = '<span class="badge badge-danger">Negatif</span>';
            } else {
                $row[] = '<span class="badge badge-warning">Netral</span>';
            }
            $row[] = $_POST['anotator'];
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->posnet_model->count_all($_POST['anotator']),
            "recordsFiltered" => $this->posnet_model->count_filtered($_POST['anotator']),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
