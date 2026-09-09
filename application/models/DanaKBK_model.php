<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class DanaKBK_model extends CI_Model
{
    public $table = 'tbl_dana_kbk';
    public $id = 'tbl_dana_kbk.id_dana';
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
        $this->db->select('d.*, k.nama_kbk as id_kbk');
        $this->db->from('tbl_dana_kbk d');
        $this->db->join('kbk k', 'd.id_kbk = k.id_kbk');
        $this->db->where('d.id_dana', $id);
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
