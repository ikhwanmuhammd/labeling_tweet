<?php

/**
 * 
 */
class Main_model extends CI_Model
{

    public function kirim_email()
    {
        $email = $this->input->post('email');
        $send_at = date('Y-m-d h:m:s');
        $join_at = NULL;

        $data = array(
            'email' => $email,
            'send_at' => $send_at,
            'join_at' => $join_at
        );
        $this->db->insert('tbl_gabung', $data);
    }
}
