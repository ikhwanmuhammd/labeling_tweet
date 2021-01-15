<?php

/**
 * 
 */
class Home_model extends CI_Model
{

    public function data_tweet()
    {
        return $this->db->get('tbl_tweet');
    }

    public function data_tweet2()
    {
        return $this->db->get('tbl_tweet2');
    }

    public function anotator()
    {
        return $this->db->get('tbl_anotator');
    }

    public function user()
    {
        return $this->db->get('tbl_user');
    }

    public function survei1()
    {
        return $this->db->get_where('tbl_tweet', array('anotator1 !=' => ''));
    }

    public function survei2()
    {
        return $this->db->get_where('tbl_tweet', array('anotator2 !=' => ''));
    }

    public function survei3()
    {
        return $this->db->get_where('tbl_tweet', array('anotator3 !=' => ''));
    }

    public function survei4()
    {
        return $this->db->get_where('tbl_tweet2', array('anotator4 !=' => ''));
    }

    public function ingin_gabung()
    {
        $query = $this->db->get_where('tbl_gabung', array('join_at' => NULL));
        return $query;
    }
}
