<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
        $this->load->model('About_model', 'about');
    }

    public function index()
    {
        $data['title'] = 'Data Perusahaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataContact'] = $this->about->dataContact();

        $this->form_validation->set_rules('id', 'id', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('contact/index', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'email' => htmlspecialchars($this->input->post('email'), true),
                'email1' => htmlspecialchars($this->input->post('email1'), true),
                'telp' => htmlspecialchars($this->input->post('telp'), true),
                'telp1' => htmlspecialchars($this->input->post('telp1'), true),
                'alamat' => htmlspecialchars($this->input->post('alamat'), true),
                'facebook' => htmlspecialchars($this->input->post('facebook'), true),
                'twitter' => htmlspecialchars($this->input->post('twitter'), true),
                'instagram' => htmlspecialchars($this->input->post('instagram'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/company/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/company/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'data_company');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('contact');
        }
    }
}
