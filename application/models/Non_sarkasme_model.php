<?php

/**
 * 
 */
class Non_sarkasme_model extends CI_Model
{

    var $table = 'tbl_tweet'; //nama tabel dari database
    var $column_order = array(null, 'id', 'tweet', 'author', 'dnt_tweet', 'reply', 'responder', 'dnt_reply', 'anotator1', 'anotator2', 'anotator3'); //field yang ada di table tweet
    var $column_search = array('id', 'tweet', 'author', 'dnt_tweet', 'reply', 'responder', 'dnt_reply', 'anotator1', 'anotator2', 'anotator3'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'asc'); // default order

    private function _get_datatables_query($id)
    {

        $this->db->from($this->table);
        $this->db->where('anotator' . $id . ' =', 'non-sarkasme');

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

    function get_datatables($id)
    {
        $this->_get_datatables_query($id);
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered($id)
    {
        $this->_get_datatables_query($id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all($id)
    {
        $this->db->from($this->table);
        $this->db->where('anotator' . $id . ' =', 'non-sarkasme');
        return $this->db->count_all_results();
    }

    // public function data_survei()
    // {
    //     return $this->db->get_where('tbl_tweet', array('label' => 'non-sarkasme'));
    // }

    // public function baru_survei($limit, $start)
    // {
    //     $query1 = $this->db->query("select * from tbl_tweet where anotator = '1' and dnt_label <> '' order by dnt_label desc");
    //     return $query1;
    // }


    public function anotator()
    {
        return $this->db->get('tbl_anotator');
    }

    public function hasil_non_sarkasme($id)
    {
        $data = array(
            'anotator' => $id,
            'label' => 'non-sarkasme'
        );

        return $this->db->get_where('tbl_tweet', $data);
    }
}
