<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Id extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // ini_set('display_errors', 'off');
    }

    /*--------------------------------------------------------------
    # Home
    --------------------------------------------------------------*/
    public function home()
    {
        $data['title'] = 'Beranda';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getJumbotron'] = $this->website->getJumbotron();

        $data['getDataService'] = $this->website->getDataService();
        $data['getDataBannerHome'] = $this->website->getDataBannerHome();
        $data['getDataFeatures1'] = $this->website->getDataFeatures1();
        $data['getDataFeatures2'] = $this->website->getDataFeatures2();
        $data['getDataIklan'] = $this->website->getDataIklan();
        $data['getPartner'] = $this->website->getPartner();
        $data['getMeta'] = $this->website->getMeta();

        $this->load->view('templates/landingpage_header', $data);
        $this->load->view('landingpage/home', $data);
        $this->load->view('templates/landingpage_footer');
    }

    /*--------------------------------------------------------------
    # Maintenance
    --------------------------------------------------------------*/
    public function maintenance()
    {
        $data['title'] = 'Maintenance';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();
        $data['getDataMaintenance'] = $this->db->get_where('data_maintenance', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['getDataMaintenanceSection1'] = $this->website->getDataMaintenanceSection1();
        $data['getDataMaintenanceSection2'] = $this->website->getDataMaintenanceSection2();
        $data['getDataMaintenanceSection3'] = $this->website->getDataMaintenanceSection3();

        $data['getDataIklan'] = $this->website->getDataIklan();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/maintenance', $data);
        $this->load->view('templates/landingpage_footer');
    }
    /*--------------------------------------------------------------
    # Modernization
    --------------------------------------------------------------*/
    public function modernization()
    {
        $data['title'] = 'Modernisasi';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();
        $data['getDataModernisasi'] = $this->db->get_where('data_modernisasi', ['id' => 1])->row_array();

        $data['getDataModernisasiSection1'] = $this->website->getDataModernisasiSection1();
        $data['getDataModernisasiSection2'] = $this->website->getDataModernisasiSection2();
        $data['getDataModernisasiSection3'] = $this->website->getDataModernisasiSection3();
        $data['getDataModernisasiSection4'] = $this->website->getDataModernisasiSection4();
        $data['getDataModernisasiSection5'] = $this->website->getDataModernisasiSection5();


        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['getDataIklan'] = $this->website->getDataIklan();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/modernization', $data);
        $this->load->view('templates/landingpage_footer');
    }

    /*--------------------------------------------------------------
    # Contact Us
    --------------------------------------------------------------*/
    public function contactUs()
    {
        $data['title'] = 'Kontak Kami';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['getDataIklan'] = $this->website->getDataIklan();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/contact-us', $data);
        $this->load->view('templates/landingpage_footer');
    }

    /*--------------------------------------------------------------
    # About Us
    --------------------------------------------------------------*/
    public function aboutUs()
    {
        $data['title'] = 'Tentang Kami';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getDataSejarah'] = $this->website->getDataSejarah();
        $data['getDataVisi'] = $this->website->getDataVisi();
        $data['getDataMisi'] = $this->website->getDataMisi();
        $data['getVisi'] = $this->website->getVisi();
        $data['getMisi'] = $this->website->getMisi();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();
        $data['getMitra'] = $this->db->get('data_mitra')->result_array();

        $data['getDataIklan'] = $this->website->getDataIklan();
        $data['getPartner'] = $this->website->getPartner();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/about-us', $data);
        $this->load->view('templates/landingpage_footer');
    }
    /*--------------------------------------------------------------
    # elevator
    --------------------------------------------------------------*/
    public function elevator()
    {
        $data['title'] = 'Produk';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['getAllElevator'] = $this->website->getAllElevator();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/elevator', $data);
        $this->load->view('templates/landingpage_footer');
    }

    public function detailElevator($slug_title)
    {
        $data['cek'] = $this->db->get_where('data_elevator', ['slug_name' => $slug_title])->row_array();
        $data['title'] = $data['cek']['name'];
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['detailElevator'] = $this->website->detailElevator($slug_title);

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/elevator-detail', $data);
        $this->load->view('templates/landingpage_footer');
    }
    /*--------------------------------------------------------------
    # Escalator
    --------------------------------------------------------------*/
    public function escalator()
    {
        $data['title'] = 'Produk';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['getAllEscalator'] = $this->website->getAllEscalator();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/escalator', $data);
        $this->load->view('templates/landingpage_footer');
    }
    public function detailEscalator($slug_title)
    {
        $data['cek'] = $this->db->get_where('data_escalator', ['slug_name' => $slug_title])->row_array();
        $data['title'] = $data['cek']['name'];
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['detailEscalator'] = $this->website->detailEscalator($slug_title);

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/escalator-detail', $data);
        $this->load->view('templates/landingpage_footer');
    }
    /*--------------------------------------------------------------
    # elevator
    --------------------------------------------------------------*/
    public function sparepart()
    {
        $data['title'] = 'Produk';
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['getAllSparepart'] = $this->website->getAllSparepart();

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/sparepart', $data);
        $this->load->view('templates/landingpage_footer');
    }
    public function detailSparepart($slug_title)
    {
        $data['cek'] = $this->db->get_where('data_sparepart', ['slug_name' => $slug_title])->row_array();
        $data['title'] = $data['cek']['name'];
        $data['getMeta'] = $this->db->get_where('data_meta', ['id' => 1])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getMeta'] = $this->website->getMeta();

        $data['detailSparepart'] = $this->website->detailSparepart($slug_title);

        $this->load->view('templates/l_header', $data);
        $this->load->view('landingpage/sparepart-detail', $data);
        $this->load->view('templates/landingpage_footer');
    }
}
