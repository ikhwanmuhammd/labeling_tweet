<?php

/**
 * 
 */
class Mulai_survei_model extends CI_Model
{
    var $table = 'tbl_tweet'; //nama tabel dari database
    var $column_order = array(null, 'id', 'tweet', 'author', 'dnt_tweet', 'reply', 'responder', 'dnt_reply', 'anotator1', 'anotator2', 'anotator3'); //field yang ada di table tweet
    var $column_search = array('id', 'tweet', 'author', 'dnt_tweet', 'reply', 'responder', 'dnt_reply', 'anotator1', 'anotator2', 'anotator3'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'ASC'); // default order

    private function _get_datatables_query($id)
    {

        $this->db->from($this->table);
        $this->db->where('anotator' . $id . ' =', '');

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
        $this->db->where('anotator' . $id . ' =', '');
        return $this->db->count_all_results();
    }

    public function baru_survei1($limit, $start)
    {
        $query1 = $this->db->query("select * from tbl_tweet where anotator1 <> '' and dnt_label1 <> '' order by dnt_label1 desc");
        return $query1;
    }

    public function baru_survei2($limit, $start)
    {
        $query1 = $this->db->query("select * from tbl_tweet where anotator2 <> '' and dnt_label2 <> '' order by dnt_label2 desc");
        return $query1;
    }

    public function baru_survei3($limit, $start)
    {
        $query1 = $this->db->query("select * from tbl_tweet where anotator3 <> '' and dnt_label3 <> '' order by dnt_label3 desc");
        return $query1;
    }


    public function non_sarkasme1($id)
    {
        $label = 'non-sarkasme';
        $dnt_label = date('d-m-Y h:i:s');

        $data = array(
            'anotator1'  => $label,
            'dnt_label1' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function non_sarkasme2($id)
    {
        $label = 'non-sarkasme';
        $dnt_label = date('d-m-Y h:i:s');

        $data = array(
            'anotator2'  => $label,
            'dnt_label2' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function non_sarkasme3($id)
    {
        $label = 'non-sarkasme';
        $dnt_label = date('d-m-Y h:i:s');

        $data = array(
            'anotator3'  => $label,
            'dnt_label3' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function sarkasme1($id)
    {
        $label = 'sarkasme';
        $dnt_label = date('d-m-Y h:i:s');

        $data = array(
            'anotator1'  => $label,
            'dnt_label1' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function sarkasme2($id)
    {
        $label = 'sarkasme';
        $dnt_label = date('d-m-Y h:i:s');

        $data = array(
            'anotator2'  => $label,
            'dnt_label2' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function sarkasme3($id)
    {
        $label = 'sarkasme';
        $dnt_label = date('d-m-Y h:i:s');

        $data = array(
            'anotator3'  => $label,
            'dnt_label3' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function ulangi1($id)
    {
        $label = '';
        $dnt_label = '';

        $data = array(
            'anotator1'  => $label,
            'dnt_label1' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function ulangi2($id)
    {
        $label = '';
        $dnt_label = '';

        $data = array(
            'anotator2'  => $label,
            'dnt_label2' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }

    public function ulangi3($id)
    {
        $label = '';
        $dnt_label = '';

        $data = array(
            'anotator3'  => $label,
            'dnt_label3' => $dnt_label
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_tweet', $data);
        return TRUE;
    }
}
