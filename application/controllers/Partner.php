<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // ini_set('display_errors', 'off');
        $this->load->model('Partner_model', 'partner');
    }

    public function index()
    {
        $data['title'] = 'Data Partner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getPartner'] = $this->partner->getPartner();

        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('is_active', 'is_active', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('partner/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG';
                    $config['upload_path'] = './assets/img/partner/';

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
                'name' => htmlspecialchars($this->input->post('name'), true),
                'is_active' => htmlspecialchars($this->input->post('is_active'), true),
                'slug_partner' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
            ];
            $this->db->insert('data_partner', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('partner');
        }
    }
    public function editPartner($slug_partner)
    {
        $data['title'] = 'Edit Data Partner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editPartner'] = $this->partner->editPartner($slug_partner);

        $this->form_validation->set_rules('name', 'name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('partner/partner-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_partner' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/partner/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/partner/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->partner->update_data($where, $data, 'data_partner');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('partner');
        }
    }
    public function deletePartner($slug_partner)
    {
        $data['delete'] = $this->db->get_where('data_partner', ['slug_partner' => $slug_partner])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/partner/' . $name_image);
        }
        $this->db->where('slug_partner', $slug_partner);
        $this->db->delete('data_partner');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data menu deleted!</div>');
        redirect('partner');
    }
}
