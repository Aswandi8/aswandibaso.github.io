<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maintenance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
        $this->load->model('Maintenance_model', 'maintenance');
    }
    /*--------------------------------------------------------------
    # Section 1
    --------------------------------------------------------------*/
    public function index()
    {
        $data['title'] = 'Maintenance Section 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['MaintenanceSection1'] = $this->db->get('maintenance_section1')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section1.title]');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('tombol', 'tombol', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
                'tombol' => htmlspecialchars($this->input->post('tombol'), true),
            ];
            $this->db->insert('maintenance_section1', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('maintenance');
        }
    }
    public function editSection1($slug_title)
    {
        $data['title'] = 'Edit Data Section 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection1'] = $this->maintenance->dataSection1($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('tombol', 'tombol', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/section-1-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
                'tombol' => htmlspecialchars($this->input->post('tombol'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->maintenance->update_data($where, $data, 'maintenance_section1');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('maintenance');
        }
    }
    public function deleteSection1($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('maintenance_section1');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('maintenance');
    }

    /*--------------------------------------------------------------
    # Section 2
    --------------------------------------------------------------*/
    public function section2()
    {
        $data['title'] = 'Maintenance Section 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['MaintenanceSection2'] = $this->db->get('maintenance_section2')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section2.title]');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/section-2', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/maintenance/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('image', $new_image);
                    } else {
                        echo $this->upload->dispay_errors();
                        $error = array('error' => $this->upload->display_errors());
                        echo $this->load->view('upload_form', $error);
                    }
                }
            } else {
                $this->db->set('image', 'default.png');
            }
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $this->db->insert('maintenance_section2', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('maintenance/section-2');
        }
    }
    public function editSection2($slug_title)
    {
        $data['title'] = 'Edit Data Section 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection2'] = $this->maintenance->dataSection2($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/section-2-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/maintenance/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/maintenance/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'maintenance_section2');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('maintenance/section-2');
        }
    }
    public function deleteSection2($slug_title)
    {
        $data['delete'] = $this->db->get_where('maintenance_section2', ['slug_title' => $slug_title])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/maintenance/' . $name_image);
        }
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('maintenance_section2');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('maintenance/section-2');
    }

    /*--------------------------------------------------------------
    # Section 3
    --------------------------------------------------------------*/
    public function section3()
    {
        $data['title'] = 'Maintenance Section 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['MaintenanceSection3'] = $this->db->get('maintenance_section3')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section2.title]');
        $this->form_validation->set_rules('sub_title', 'sub title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/section-3', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/maintenance/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('image', $new_image);
                    } else {
                        echo $this->upload->dispay_errors();
                        $error = array('error' => $this->upload->display_errors());
                        echo $this->load->view('upload_form', $error);
                    }
                }
            } else {
                $this->db->set('image', 'default.png');
            }
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'sub_title' => htmlspecialchars($this->input->post('sub_title'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $this->db->insert('maintenance_section3', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('maintenance/section-3');
        }
    }
    public function editSection3($slug_title)
    {
        $data['title'] = 'Edit Data Section 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection3'] = $this->maintenance->dataSection3($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');
        $this->form_validation->set_rules('sub_title', 'sub title', 'required');;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/section-3-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'sub_title' => htmlspecialchars($this->input->post('sub_title'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/maintenance/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/maintenance/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'maintenance_section3');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('maintenance/section-3');
        }
    }
    public function deleteSection3($slug_title)
    {
        $data['delete'] = $this->db->get_where('maintenance_section3', ['slug_title' => $slug_title])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/maintenance/' . $name_image);
        }
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('maintenance_section3');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('maintenance/section-3');
    }

    /*--------------------------------------------------------------
    # Data Maintenance
    --------------------------------------------------------------*/
    public function dataMaintenance()
    {
        $data['title'] = 'Data Maintenance';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataMaintenance'] = $this->maintenance->dataMaintenance();

        $this->form_validation->set_rules('id', 'id', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('maintenance/data-maintenance', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'section_1' => $this->input->post('section_1'),
                'section_2' => $this->input->post('section_2'),
                'section_3' => $this->input->post('section_3'),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->website->update_data($where, $data, 'data_maintenance');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('maintenance/data-maintenance');
        }
    }
}
