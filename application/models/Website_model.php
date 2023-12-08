<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website_model extends CI_Model
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
    # Data Image
    --------------------------------------------------------------*/
    public function getFavicon()
    {
        $query = "SELECT * FROM data_image WHERE id = 1";
        return $this->db->query($query)->result_array();
    }
    public function getLogo()
    {
        $query = "SELECT * FROM data_image WHERE id = 2";
        return $this->db->query($query)->result_array();
    }
    public function getJumbotron()
    {
        $query = "SELECT * FROM data_image WHERE id = 3";
        return $this->db->query($query)->result_array();
    }
    public function getVisi()
    {
        $query = "SELECT * FROM data_image WHERE id = 4";
        return $this->db->query($query)->result_array();
    }
    public function getMisi()
    {
        $query = "SELECT * FROM data_image WHERE id = 5";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Data Service
    --------------------------------------------------------------*/
    public function getDataService()
    {
        $query = "SELECT * FROM data_service";
        return $this->db->query($query)->result_array();
    }
    public function editDataService($slug_title)
    {
        $query = "SELECT * FROM data_service WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Data Service
    --------------------------------------------------------------*/
    public function getDataBannerHome()
    {
        $query = "SELECT * FROM data_banner LIMIT 1";
        return $this->db->query($query)->result_array();
    }
    public function getDataBanner()
    {
        $query = "SELECT * FROM data_banner";
        return $this->db->query($query)->result_array();
    }
    public function editDataBanner($slug_title)
    {
        $query = "SELECT * FROM data_banner WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Data Features
    --------------------------------------------------------------*/
    public function getDataFeatures()
    {
        $query = "SELECT * FROM data_features";
        return $this->db->query($query)->result_array();
    }
    public function editDataFeatures($slug_title)
    {
        $query = "SELECT * FROM data_features WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    public function getDataFeatures1()
    {
        $query = "SELECT * FROM data_features WHERE id = 1";
        return $this->db->query($query)->result_array();
    }
    public function getDataFeatures2()
    {
        $query = "SELECT * FROM data_features WHERE id = 2";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Data Iklan
    --------------------------------------------------------------*/
    public function getDataIklan()
    {
        $query = "SELECT * FROM data_banner1";
        return $this->db->query($query)->result_array();
    }
    public function editDataIklan($slug_title)
    {
        $query = "SELECT * FROM data_banner1 WHERE slug_title = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Data Partner
    --------------------------------------------------------------*/
    public function getPartner()
    {
        $query = "SELECT * FROM data_partner";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Data Maintenance
    --------------------------------------------------------------*/
    public function getDataMaintenanceSection1()
    {
        $query = "SELECT * FROM maintenance_section1";
        return $this->db->query($query)->result_array();
    }
    public function getDataMaintenanceSection2()
    {
        $query = "SELECT * FROM maintenance_section2";
        return $this->db->query($query)->result_array();
    }
    public function getDataMaintenanceSection3()
    {
        $query = "SELECT * FROM maintenance_section3";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Data Modernisasi
    --------------------------------------------------------------*/
    public function getDataModernisasiSection1()
    {
        $query = "SELECT * FROM modernisasi_section1";
        return $this->db->query($query)->result_array();
    }
    public function getDataModernisasiSection2()
    {
        $query = "SELECT * FROM modernisasi_section2";
        return $this->db->query($query)->result_array();
    }
    public function getDataModernisasiSection3()
    {
        $query = "SELECT * FROM modernisasi_section3";
        return $this->db->query($query)->result_array();
    }
    public function getDataModernisasiSection4()
    {
        $query = "SELECT * FROM modernisasi_section4";
        return $this->db->query($query)->result_array();
    }
    public function getDataModernisasiSection5()
    {
        $query = "SELECT * FROM modernisasi_section5";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Data About
    --------------------------------------------------------------*/
    public function getDataSejarah()
    {
        $query = "SELECT * FROM data_sejarah";
        return $this->db->query($query)->result_array();
    }
    public function getDataVisi()
    {
        $query = "SELECT * FROM data_visi";
        return $this->db->query($query)->result_array();
    }
    public function getDataMisi()
    {
        $query = "SELECT * FROM data_misi";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Elevator ID 
    --------------------------------------------------------------*/
    public function getAllElevator()
    {
        $query = "SELECT data_elevator.*, data_kategory_elevator.title FROM data_elevator JOIN data_kategory_elevator ON data_elevator.kategori_id = data_kategory_elevator.id";
        return $this->db->query($query)->result_array();
    }
    public function detailElevator($slug_title)
    {
        $query = "SELECT data_elevator.*, data_kategory_elevator.title FROM data_elevator JOIN data_kategory_elevator ON data_elevator.kategori_id = data_kategory_elevator.id WHERE data_elevator.slug_name = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Escalator ID 
    --------------------------------------------------------------*/
    public function getAllEscalator()
    {
        $query = "SELECT data_escalator.*, data_kategory_escalator.title FROM data_escalator JOIN data_kategory_escalator ON data_escalator.kategori_id = data_kategory_escalator.id";
        return $this->db->query($query)->result_array();
    }
    public function detailEscalator($slug)
    {
        $query = "SELECT data_escalator.*, data_kategory_escalator.title FROM data_escalator JOIN data_kategory_escalator ON data_escalator.kategori_id = data_kategory_escalator.id WHERE data_escalator.slug_name = '$slug'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Sparepart ID 
    --------------------------------------------------------------*/
    public function getAllSparepart()
    {
        $query = "SELECT * FROM data_sparepart";
        return $this->db->query($query)->result_array();
    }
    public function detailSparepart($slug_title)
    {
        $query = "SELECT * FROM data_sparepart WHERE slug_name = '$slug_title'";
        return $this->db->query($query)->result_array();
    }
    /*--------------------------------------------------------------
    # Sparepart ID 
    --------------------------------------------------------------*/
    public function dataMeta()
    {
        $query = "SELECT * FROM data_meta WHERE id = 1";
        return $this->db->query($query)->result_array();
    }
    public function getMeta()
    {
        $query = "SELECT * FROM data_meta WHERE id = 1";
        return $this->db->query($query)->result_array();
    }
}
