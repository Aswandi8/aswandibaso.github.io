<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner_model extends CI_Model
{
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    /*--------------------------------------------------------------
    # Partner
    --------------------------------------------------------------*/
    public function getPartner()
    {
        $query = "SELECT * FROM data_partner";
        return $this->db->query($query)->result_array();
    }
    public function editPartner($slug_partner)
    {
        $query = "SELECT * FROM data_partner WHERE slug_partner = '$slug_partner'  ";
        return $this->db->query($query)->result_array();
    }
}
