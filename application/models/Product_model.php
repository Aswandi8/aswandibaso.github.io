<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
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
    # Kategori
    --------------------------------------------------------------*/
    public function editKategoriElevator($slug_title)
    {
        $query = "SELECT * FROM data_kategory_elevator WHERE slug_title = '$slug_title'  ";
        return $this->db->query($query)->result_array();
    }
    public function editKategoriEscalator($slug_title)
    {
        $query = "SELECT * FROM data_kategory_escalator WHERE slug_title = '$slug_title'  ";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Elevator
    --------------------------------------------------------------*/
    public function getElevator()
    {
        $query = "SELECT data_elevator.*, data_kategory_elevator.title FROM data_elevator JOIN data_kategory_elevator ON data_elevator.kategori_id = data_kategory_elevator.id";
        return $this->db->query($query)->result_array();
    }
    public function editElevator($slug_name)
    {
        $query = "SELECT data_elevator.*, data_kategory_elevator.title FROM data_elevator JOIN data_kategory_elevator ON data_elevator.kategori_id = data_kategory_elevator.id WHERE data_elevator.slug_name= '$slug_name'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Escalator
    --------------------------------------------------------------*/
    public function getEscalator()
    {
        $query = "SELECT data_escalator.*, data_kategory_escalator.title FROM data_escalator JOIN data_kategory_escalator ON data_escalator.kategori_id = data_kategory_escalator.id";
        return $this->db->query($query)->result_array();
    }
    public function editEscalator($slug_name)
    {
        $query = "SELECT data_escalator.*, data_kategory_escalator.title FROM data_escalator JOIN data_kategory_escalator ON data_escalator.kategori_id = data_kategory_escalator.id WHERE data_escalator.slug_name= '$slug_name'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Spare Part
    --------------------------------------------------------------*/
    public function getSparepart()
    {
        $query = "SELECT * FROM data_sparepart";
        return $this->db->query($query)->result_array();
    }
    public function editSparepart($slug_name)
    {
        $query = "SELECT * FROM data_sparepart WHERE slug_name = '$slug_name'";
        return $this->db->query($query)->result_array();
    }
}
