<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
        $this->load->model('About_model', 'about');
    }

    /*--------------------------------------------------------------
    # Sejarah
    --------------------------------------------------------------*/
    public function sejarah()
    {
        $data['title'] = 'Sejarah KBM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSejarah'] = $this->about->dataSejarah();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('about/sejarah', $data);
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
                $config['upload_path'] = './assets/img/about/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/about/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'data_sejarah');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('about/sejarah-kbm');
        }
    }

    /*--------------------------------------------------------------
    # Visi
    --------------------------------------------------------------*/
    public function visi()
    {
        $data['title'] = 'Visi KBM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataVisi'] = $this->db->get('data_visi')->result_array();

        $this->form_validation->set_rules('visi', 'visi', 'required|is_unique[data_visi.visi]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('about/visi', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'visi' => htmlspecialchars($this->input->post('visi'), true),
                'slug_visi' => htmlspecialchars(url_title($this->input->post('visi'), 'dash', true)),
            ];
            $this->db->insert('data_visi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('about/visi-kbm');
        }
    }
    public function editVisi($slug_title)
    {
        $data['title'] = 'Edit Visi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editVisi'] = $this->about->editVisi($slug_title);

        $this->form_validation->set_rules('visi', 'visi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('about/visi-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'visi' => htmlspecialchars($this->input->post('visi'), true),
                'slug_visi' => htmlspecialchars(url_title($this->input->post('visi'), 'dash', true)),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->about->update_data($where, $data, 'data_visi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('about/visi-kbm');
        }
    }
    public function deleteVisi($slug_visi)
    {
        $this->db->where('slug_visi', $slug_visi);
        $this->db->delete('data_visi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('about/visi-kbm');
    }

    /*--------------------------------------------------------------
    # Misi
    --------------------------------------------------------------*/
    public function misi()
    {
        $data['title'] = 'Misi KBM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataMisi'] = $this->db->get('data_misi')->result_array();

        $this->form_validation->set_rules('misi', 'misi', 'required|is_unique[data_misi.misi]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('about/misi', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'misi' => htmlspecialchars($this->input->post('misi'), true),
                'slug_misi' => htmlspecialchars(url_title($this->input->post('misi'), 'dash', true)),
            ];
            $this->db->insert('data_misi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('about/misi-kbm');
        }
    }
    public function editMisi($slug_title)
    {
        $data['title'] = 'Edit Visi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editMisi'] = $this->about->editMisi($slug_title);

        $this->form_validation->set_rules('misi', 'misi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('about/misi-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'misi' => htmlspecialchars($this->input->post('misi'), true),
                'slug_misi' => htmlspecialchars(url_title($this->input->post('misi'), 'dash', true)),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->about->update_data($where, $data, 'data_misi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('about/misi-kbm');
        }
    }
    public function deleteMisi($slug_misi)
    {
        $this->db->where('slug_misi', $slug_misi);
        $this->db->delete('data_misi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('about/misi-kbm');
    }
}
