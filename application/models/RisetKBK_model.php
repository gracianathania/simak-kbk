<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class RisetKBK_model extends CI_Model
{
    public $table = 'tbl_riset_kbk';
    public $id = 'tbl_riset_kbk.id_riset';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('r.*, k.nama_kbk as id_kbk');
        $this->db->from('tbl_riset_kbk r');
        $this->db->join('kbk k', 'r.id_kbk = k.id_kbk');
        $this->db->where('r.id_riset', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
