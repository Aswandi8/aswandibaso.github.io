<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modernisasi_model extends CI_Model
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
    public function dataSection1($slug_title)
    {
        $query = "SELECT * FROM modernisasi_section1 WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Section 2
    --------------------------------------------------------------*/
    public function dataSection2($slug_title)
    {
        $query = "SELECT * FROM modernisasi_section2 WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Section 3
    --------------------------------------------------------------*/
    public function dataSection3($slug_title)
    {
        $query = "SELECT * FROM modernisasi_section3 WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Section 3
    --------------------------------------------------------------*/
    public function dataSection4($slug_title)
    {
        $query = "SELECT * FROM modernisasi_section4 WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Section 3
    --------------------------------------------------------------*/
    public function dataSection5($slug_title)
    {
        $query = "SELECT * FROM modernisasi_section5 WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Data Modernisasi
    --------------------------------------------------------------*/
    public function dataModernisasi()
    {
        $query = "SELECT * FROM data_modernisasi WHERE id = '1'";
        return $this->db->query($query)->result_array();
    }
}
