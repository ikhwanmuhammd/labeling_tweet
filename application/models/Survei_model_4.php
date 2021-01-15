<?php

/**
 * 
 */
class Survei_model_4 extends CI_Model
{

    var $table = 'tbl_tweet2'; //nama tabel dari database
    var $column_order = array(null, 'id', 'tweet', 'dnt_tweet', 'anotator4'); //field yang ada di table tweet
    var $column_search = array('id', 'tweet', 'dnt_tweet', 'anotator4'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'asc'); // default order


    private function _get_datatables_query()
    {

        $this->db->from($this->table);
        $this->db->where('anotator4 !=', '');

        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        $this->db->where('anotator4 !=', '');
        return $this->db->count_all_results();
    }

    function fetch_data()
    {
        $this->db->select("id, tweet, dnt_tweet, anotator4, dnt_label4");
        $this->db->where('anotator4 !=', '');
        $this->db->from('tbl_tweet2');
        return $this->db->get();
    }

    public function data_tweet()
    {
        $hasil = $this->db->query('SELECT * FROM `tbl_tweet2` WHERE anotator4 <> ""');
        return $hasil;
    }

    public function anotator()
    {
        return $this->db->get('tbl_anotator');
    }

    public function survei()
    {
        return $this->db->get('tbl_survei');
    }

    public function ulangi($id)
    {
        $label = '';
        $dnt_label = '';
        $data = array(
            'anotator4'  => $label,
            'dnt_label4' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet2', $data);
        return TRUE;
    }
}
