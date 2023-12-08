<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
    }

    /*--------------------------------------------------------------
    # Data Image
    --------------------------------------------------------------*/
    public function index()
    {
        $data['title'] = 'Data Image';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getJumbotron'] = $this->website->getJumbotron();
        $data['getVisi'] = $this->website->getVisi();
        $data['getMisi'] = $this->website->getMisi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('website/index', $data);
        $this->load->view('templates/footer');
    }

    /*--------------------------------------------------------------
    # Data Service
    --------------------------------------------------------------*/
    public function service()
    {
        $data['title'] = 'Data Service';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getDataService'] = $this->website->getDataService();

        $this->form_validation->set_rules('title', 'title', 'required|trim|is_unique[data_service.title]');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('icon', 'icon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-service', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
            ];
            $this->db->insert('data_service', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('website/service');
        }
    }
    public function editService($slug_title)
    {
        $data['title'] = 'Edit Data Service';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editDataService'] = $this->website->editDataService($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-service-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title')),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon')),
                'keterangan' => htmlspecialchars($this->input->post('keterangan')),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id')),
            ];
            $this->website->update_data($where, $data, 'data_service');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('website/service');
        }
    }
    public function deleteService($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('data_service');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('website/service');
    }

    /*--------------------------------------------------------------
    # Data Banner
    --------------------------------------------------------------*/
    public function banner()
    {
        $data['title'] = 'Data Banner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getDataBanner'] = $this->website->getDataBanner();

        $this->form_validation->set_rules('title', 'title', 'required|trim|is_unique[data_service.title]');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-banner', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|webp';
                    $config['upload_path'] = './assets/img/landingpage/';

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
            $this->db->insert('data_banner', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('website/banner');
        }
    }
    public function editBanner($slug_title)
    {
        $data['title'] = 'Edit Data Banner';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editDataBanner'] = $this->website->editDataBanner($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-banner-edit', $data);
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
                $config['upload_path'] = './assets/img/landingpage/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/landingpage/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'data_banner');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('website/banner');
        }
    }
    public function deleteBanner($slug_title)
    {
        $data['delete'] = $this->db->get_where('data_banner', ['slug_title' => $slug_title])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default.png') {
            unlink(FCPATH . 'assets/img/landingpage/' . $name_image);
        }
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('data_banner');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('website/banner');
    }
    public function bannerChangeActive()
    {
        $id = $this->input->post('val');
        $user_active = $this->input->post('apply');

        $result = $this->db->get_where('data_banner', $id);

        if ($result->num_rows() < 1) {
            $this->db->query("UPDATE  data_banner SET is_active = $user_active  WHERE id = $id");
        } else {
            $this->db->query("UPDATE  data_banner SET is_active = $user_active  WHERE id = $id");
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Banner is active changed!</div>');
    }

    /*--------------------------------------------------------------
    # Data Features
    --------------------------------------------------------------*/
    public function features()
    {
        $data['title'] = 'Data Features';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getDataFeatures'] = $this->website->getDataFeatures();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('website/data-features', $data);
        $this->load->view('templates/footer');
    }
    public function addFeatures()
    {
        $data['title'] = 'Add Data Features';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getDataFeatures'] = $this->website->getDataFeatures();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        $this->form_validation->set_rules('tombol', 'tombol', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-features-add', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/landingpage/';

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
                'keterangan' => $this->input->post('keterangan'), true,
                'tombol' => htmlspecialchars($this->input->post('tombol'), true),
            ];
            $this->db->insert('data_features', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('website/features');
        }
    }
    public function editFeatures($slug_title)
    {
        $data['title'] = 'Edit Data Features';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editDataFeatures'] = $this->website->editDataFeatures($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-features-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'keterangan' => $this->input->post('keterangan'),
                'tombol' => htmlspecialchars($this->input->post('tombol'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/landingpage/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/landingpage/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'data_features');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('website/features');
        }
    }
    public function deleteFeatures($slug_title)
    {
        // $data['delete'] = $this->db->get_where('data_features', ['slug_title' => $slug_title])->row_array();
        // $name_image = $data['delete']['image'];
        // if ($name_image != 'default.png') {
        //     unlink(FCPATH . 'assets/img/landingpage/' . $name_image);
        // }
        // $this->db->where('slug_title', $slug_title);
        // $this->db->delete('data_features');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data cannot deleted!</div>');
        redirect('website/features');
    }

    /*--------------------------------------------------------------
    # Data Iklan
    --------------------------------------------------------------*/
    public function iklan()
    {
        $data['title'] = 'Data Iklan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getDataIklan'] = $this->website->getDataIklan();

        $this->form_validation->set_rules('title', 'title', 'required|trim|is_unique[data_service.title]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-iklan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'sub_title' => htmlspecialchars($this->input->post('sub_title'), true),
                'tombol' => htmlspecialchars($this->input->post('tombol'), true),
            ];
            $this->db->insert('data_banner1', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('website/iklan');
        }
    }
    public function editIklan($slug_title)
    {
        $data['title'] = 'Edit Data Iklan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['editDataIklan'] = $this->website->editDataIklan($slug_title);

        $this->form_validation->set_rules('title', 'title', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-iklan-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'sub_title' => htmlspecialchars($this->input->post('sub_title'), true),
                'tombol' => htmlspecialchars($this->input->post('tombol'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->website->update_data($where, $data, 'data_banner1');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('website/iklan');
        }
    }
    public function deleteIklan($slug_title)
    {
        // $this->db->where('slug_title', $slug_title);
        // $this->db->delete('data_banner1');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data cannot deleted!</div>');
        redirect('website/iklan');
    }

    /*--------------------------------------------------------------
    # Update Image
    --------------------------------------------------------------*/
    public function updateImage()
    {
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = htmlspecialchars($this->input->post('old_image'), true);
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('ket', 1);
        $this->db->where('id', htmlspecialchars($this->input->post('id'), true));
        $this->db->update('data_image');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
        redirect('website');
    }

    /*--------------------------------------------------------------
    # Data Meta
    --------------------------------------------------------------*/
    public function meta()
    {
        $data['title'] = 'Data Meta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataMeta'] = $this->website->dataMeta();

        $this->form_validation->set_rules('meta_author', 'author', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-meta', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'meta_author' => htmlspecialchars($this->input->post('meta_author'), true),
                'meta_keywords' => htmlspecialchars($this->input->post('meta_keywords'), true),
                'meta_description' => htmlspecialchars($this->input->post('meta_description'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->website->update_data($where, $data, 'data_meta');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('website/meta');
        }
    }

    /*--------------------------------------------------------------
    # Data Mitra
    --------------------------------------------------------------*/
    public function mitra()
    {
        $data['title'] = 'Data Meta';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getMitra'] = $this->db->get('data_mitra')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('total', 'total', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('website/data-mitra', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_title' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'total' => htmlspecialchars($this->input->post('total'), true),
            ];
            $this->db->insert('data_mitra', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
            redirect('website/mitra');
        }
    }
    public function deleteMitra($slug_title)
    {
        $this->db->where('slug_title', $slug_title);
        $this->db->delete('data_mitra');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('website/mitra');
    }
}
