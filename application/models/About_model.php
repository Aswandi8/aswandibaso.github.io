<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_model extends CI_Model
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
    # Section 1
    --------------------------------------------------------------*/
    public function dataSejarah()
    {
        $query = "SELECT * FROM data_sejarah WHERE id = '1'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Visi
    --------------------------------------------------------------*/
    public function editVisi($slug_visi)
    {
        $query = "SELECT * FROM data_visi WHERE slug_visi = '$slug_visi'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Misi
    --------------------------------------------------------------*/
    public function editMisi($slug_misi)
    {
        $query = "SELECT * FROM data_misi WHERE slug_misi = '$slug_misi'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Misi
    --------------------------------------------------------------*/
    public function dataContact()
    {
        $query = "SELECT * FROM data_company WHERE id = '1'";
        return $this->db->query($query)->result_array();
    }
}
