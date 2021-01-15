<?php

/**
 * 
 */
class User_model extends CI_Model
{

    public function user()
    {
        return $this->db->get('tbl_user');
    }

    public function anotator()
    {
        return $this->db->get('tbl_anotator');
    }

    public function gabung()
    {
        return $this->db->get('tbl_gabung');
    }

    public function tambah_anotator()
    {
        $id_anotator  = $this->input->post('id_anotator');
        $nama_anotator  = $this->input->post('nama_anotator');

        $data = array(
            'id'  => $id_anotator,
            'nama' => $nama_anotator
        );
        $this->db->insert('tbl_anotator', $data);
    }

    public function tambah_user()
    {
        $username  = $this->input->post('username');
        $password  = $this->input->post('confirm_password');
        $firstname = $this->input->post('firstname');
        $lastname  = $this->input->post('lastname');
        $email     = $this->input->post('email');
        $phone     = $this->input->post('phone');
        $status    = $this->input->post('status');
        $as_anotator  = $this->input->post('as_anotator');
        $id_role   = 2;
        $created_at = date('Y-m-d h:m:s');

        $data = array(
            'username'  => $username,
            'password'  => get_hash($password),
            'first_name' => $firstname,
            'last_name'  => $lastname,
            'email'     => $email,
            'phone'     => $phone,
            'status'    => $status,
            'as_anotator'  => $as_anotator,
            'id_role'   => $id_role,
            'created_at' => $created_at
        );
        $this->db->insert('tbl_user', $data);
    }

    public function konfirm_email($id)
    {
        $join_at = date('Y-m-d h:m:s');

        $data = array(
            'join_at'  => $join_at
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_gabung', $data);
        return TRUE;
    }

    public function batal_gabung($id)
    {
        $join_at = NULL;

        $data = array(
            'join_at'  => $join_at
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_gabung', $data);
        return TRUE;
    }

    public function batal_minta($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_gabung');
    }

    public function hapus_anotator($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_anotator');
    }

    public function hapus_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_user');
    }
}
