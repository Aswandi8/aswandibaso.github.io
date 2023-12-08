<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
        $this->load->model('Product_model', 'product');
    }
    /*--------------------------------------------------------------
    # Elevator
    --------------------------------------------------------------*/
    public function elevator()
    {
        $data['title'] = 'Kategori Elevator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getKategori'] = $this->db->get('data_kategory_elevator')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section1.title]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/elevator', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
            ];
            $this->db->insert('data_kategory_elevator', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('kategori/elevator');
        }
    }
    public function editElevator($slug_title)
    {
        $data['title'] = 'Edit Elevator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editKategoriElevator'] = $this->product->editKategoriElevator($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/elevator-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->product->update_data($where, $data, 'data_kategory_elevator');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('kategori/elevator');
        }
    }
    public function deleteElevator($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('data_kategory_elevator');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('kategori/elevator');
    }

    /*--------------------------------------------------------------
    # Escalator
    --------------------------------------------------------------*/
    public function escalator()
    {
        $data['title'] = 'Kategori Escalator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getKategori'] = $this->db->get('data_kategory_escalator')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section1.title]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/escalator', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
            ];
            $this->db->insert('data_kategory_escalator', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('kategori/escalator');
        }
    }
    public function editEscalator($slug_title)
    {
        $data['title'] = 'Edit Elevator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editKategoriEscalator'] = $this->product->editKategoriEscalator($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/escalator-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->product->update_data($where, $data, 'data_kategory_escalator');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('kategori/escalator');
        }
    }
    public function deleteEscalator($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('data_kategory_escalator');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('kategori/escalator');
    }
}
