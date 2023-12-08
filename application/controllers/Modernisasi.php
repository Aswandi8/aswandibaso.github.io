<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modernisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
        $this->load->model('Modernisasi_model', 'modernisasi');
    }

    /*--------------------------------------------------------------
    # Section 1
    --------------------------------------------------------------*/
    public function index()
    {
        $data['title'] = 'Modernisasi Section 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['ModernisasiSection1'] = $this->db->get('modernisasi_section1')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[modernisasi_section1.title]');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $this->db->insert('modernisasi_section1', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('modernisasi');
        }
    }
    public function editSection1($slug_title)
    {
        $data['title'] = 'Edit Data Section 1';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection1'] = $this->modernisasi->dataSection1($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-1-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->modernisasi->update_data($where, $data, 'modernisasi_section1');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('modernisasi');
        }
    }
    public function deleteSection1($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('modernisasi_section1');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('modernisasi');
    }

    /*--------------------------------------------------------------
    # Section 2
    --------------------------------------------------------------*/
    public function section2()
    {
        $data['title'] = 'Modernisasi Section 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['ModernisasiSection2'] = $this->db->get('modernisasi_section2')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[modernisasi_section1.title]');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-2', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $this->db->insert('modernisasi_section2', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('modernisasi/section-2');
        }
    }
    public function editSection2($slug_title)
    {
        $data['title'] = 'Edit Data Section 2';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection2'] = $this->modernisasi->dataSection2($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-2-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->modernisasi->update_data($where, $data, 'modernisasi_section2');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('modernisasi/section-2');
        }
    }
    public function deleteSection2($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('modernisasi_section2');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('modernisasi/section-2');
    }

    /*--------------------------------------------------------------
    # Section 3
    --------------------------------------------------------------*/
    public function section3()
    {
        $data['title'] = 'Modernisasi Section 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['ModernisasiSection3'] = $this->db->get('modernisasi_section3')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section2.title]');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-3', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/modernisasi/';

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
            $this->db->insert('modernisasi_section3', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('modernisasi/section-3');
        }
    }
    public function editSection3($slug_title)
    {
        $data['title'] = 'Edit Data Section 3';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection3'] = $this->modernisasi->dataSection3($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-3-edit', $data);
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
                $config['upload_path'] = './assets/img/modernisasi/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/modernisasi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'modernisasi_section3');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('modernisasi/section-3');
        }
    }
    public function deleteSection3($slug_title)
    {
        $data['delete'] = $this->db->get_where('modernisasi_section3', ['slug_title' => $slug_title])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/modernisasi/' . $name_image);
        }
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('modernisasi_section3');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('modernisasi/section-3');
    }

    /*--------------------------------------------------------------
    # Section 4
    --------------------------------------------------------------*/
    public function section4()
    {
        $data['title'] = 'Modernisasi Section 4';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['ModernisasiSection4'] = $this->db->get('modernisasi_section4')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section2.title]');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-4', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/modernisasi/';

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
            $this->db->insert('modernisasi_section4', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('modernisasi/section-4');
        }
    }
    public function editSection4($slug_title)
    {
        $data['title'] = 'Edit Data Section 4';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection4'] = $this->modernisasi->dataSection4($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-4-edit', $data);
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
                $config['upload_path'] = './assets/img/modernisasi/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/modernisasi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'modernisasi_section4');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('modernisasi/section-4');
        }
    }
    public function deleteSection4($slug_title)
    {
        $data['delete'] = $this->db->get_where('modernisasi_section4', ['slug_title' => $slug_title])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/modernisasi/' . $name_image);
        }
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('modernisasi_section4');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('modernisasi/section-4');
    }

    /*--------------------------------------------------------------
    # Section 5
    --------------------------------------------------------------*/
    public function section5()
    {
        $data['title'] = 'Modernisasi Section 5';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['ModernisasiSection5'] = $this->db->get('modernisasi_section5')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[maintenance_section2.title]');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-5', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/modernisasi/';

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
            $this->db->insert('modernisasi_section5', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('modernisasi/section-5');
        }
    }
    public function editSection5($slug_title)
    {
        $data['title'] = 'Edit Data Section 5';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataSection5'] = $this->modernisasi->dataSection5($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/section-5-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'keterangan' => $this->input->post('keterangan'),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/modernisasi/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/modernisasi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'modernisasi_section5');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('modernisasi/section-5');
        }
    }
    public function deleteSection5($slug_title)
    {
        $data['delete'] = $this->db->get_where('modernisasi_section5', ['slug_title' => $slug_title])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/modernisasi/' . $name_image);
        }
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('modernisasi_section5');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('modernisasi/section-5');
    }

    /*--------------------------------------------------------------
    # Data Modernisasi
    --------------------------------------------------------------*/
    public function dataModernisasi()
    {
        $data['title'] = 'Data Modernisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataModernisasi'] = $this->modernisasi->dataModernisasi();

        $this->form_validation->set_rules('id', 'id', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('modernisasi/data-modernisasi', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'section_1' => $this->input->post('section_1'),
                'section_2' => $this->input->post('section_2'),
                'section_3' => $this->input->post('section_3'),
                'section_4' => $this->input->post('section_4'),
                'section_5' => $this->input->post('section_5'),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->website->update_data($where, $data, 'data_modernisasi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('modernisasi/data-modernisasi');
        }
    }
}
