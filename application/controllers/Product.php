<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // ini_set('display_errors', 'off');
        $this->load->model('Product_model', 'product');
    }
    /*--------------------------------------------------------------
    # Elevator
    --------------------------------------------------------------*/
    public function elevator()
    {
        $data['title'] = 'Elevator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getElevator'] = $this->product->getElevator();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('product/elevator', $data);
        $this->load->view('templates/footer', $data);
    }
    function addelevator()
    {
        $data['title'] = 'Add Elevator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getKategoriElevator'] = $this->db->get('data_kategory_elevator')->result_array();

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('kategori_id', 'kategori', 'required');
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('person', 'person', 'required');
        $this->form_validation->set_rules('speed', 'speed', 'required');
        $this->form_validation->set_rules('landing', 'landings', 'required');
        $this->form_validation->set_rules('motor', 'motor', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/elevator-add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_name' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
                'kategori_id' => htmlspecialchars($this->input->post('kategori_id'), true),
                'capacity' => htmlspecialchars($this->input->post('capacity'), true),
                'person' => htmlspecialchars($this->input->post('person'), true),
                'speed' => htmlspecialchars($this->input->post('speed'), true),
                'landing' => htmlspecialchars($this->input->post('landing'), true),
                'motor' => htmlspecialchars($this->input->post('motor'), true),
                'keterangan' => $this->input->post('keterangan'),
            ];
            $upload_image = $_FILES['image']['name'];

            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/product/';

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
                $this->db->set('image', 'default-elevator.png');
            }
            $upload_image1 = $_FILES['parameter_list']['name'];
            if ($upload_image1 != "") {
                if ($upload_image1) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/product/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('parameter_list')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('parameter_list', $new_image);
                    } else {
                        echo $this->upload->dispay_errors();
                        $error = array('error' => $this->upload->display_errors());
                        echo $this->load->view('upload_form', $error);
                    }
                }
            }
            $this->db->insert('data_elevator', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New product elevator added!</div>');
            redirect('product/elevator');
        }
    }
    function editElevator($slug_name)
    {
        $data['title'] = 'Edit Elevator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getKategoriElevator'] = $this->db->get('data_kategory_elevator')->result_array();

        $data['editElevator'] = $this->product->editElevator($slug_name);

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('kategori_id', 'kategori', 'required');
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('person', 'person', 'required');
        $this->form_validation->set_rules('speed', 'speed', 'required');
        $this->form_validation->set_rules('landing', 'landings', 'required');
        $this->form_validation->set_rules('motor', 'motor', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/elevator-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_name' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
                'kategori_id' => htmlspecialchars($this->input->post('kategori_id'), true),
                'capacity' => htmlspecialchars($this->input->post('capacity'), true),
                'person' => htmlspecialchars($this->input->post('person'), true),
                'speed' => htmlspecialchars($this->input->post('speed'), true),
                'landing' => htmlspecialchars($this->input->post('landing'), true),
                'motor' => htmlspecialchars($this->input->post('motor'), true),
                'keterangan' => $this->input->post('keterangan'),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/product/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $upload_image1 = $_FILES['parameter_list']['name'];
            if ($upload_image1 != "") {
                if ($upload_image1) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/product/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('parameter_list')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('parameter_list', $new_image);
                    } else {
                        echo $this->upload->dispay_errors();
                        $error = array('error' => $this->upload->display_errors());
                        echo $this->load->view('upload_form', $error);
                    }
                }
            }
            $this->website->update_data($where, $data, 'data_elevator');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('product/elevator');
        }
    }
    public function deleteElevator($slug_name)
    {
        $data['delete'] = $this->db->get_where('data_elevator', ['slug_name' => $slug_name])->row_array();
        $name_image = $data['delete']['image'];
        $parameter_list = $data['delete']['parameter_list'];
        if ($name_image != 'default-elevator.png') {
            unlink(FCPATH . 'assets/img/product/' . $name_image);
            unlink(FCPATH . 'assets/img/product/' . $parameter_list);
        }
        $this->db->where('slug_name', $slug_name);
        $this->db->delete('data_elevator');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('product/elevator');
    }

    /*--------------------------------------------------------------
    # Escalator
    --------------------------------------------------------------*/
    public function escalator()
    {
        $data['title'] = 'Escalator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getEscalator'] = $this->product->getEscalator();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('product/escalator', $data);
        $this->load->view('templates/footer', $data);
    }
    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/img/product/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }
    function addescalator()
    {
        $data['title'] = 'Add Escalator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['getKategoriElevator'] = $this->db->get('data_kategory_escalator')->result_array();

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('kategori_id', 'kategori', 'required');
        $this->form_validation->set_rules('travel_height', 'travel height', 'required');
        $this->form_validation->set_rules('power', 'power', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/escalator-add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            if ($cpt < 5) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->load->library('upload', $this->set_upload_options());
                    $this->upload->do_upload('userfile');
                    $dataInfo[] = $this->upload->data();
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Max 4 image!</div>');
                redirect('product/add-escalator');
            }
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $this->load->library('upload', $this->set_upload_options());

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
                $this->db->set('image', 'default-escalator.png');
            }
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_name' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
                'kategori_id' => htmlspecialchars($this->input->post('kategori_id'), true),
                'travel_height' => htmlspecialchars($this->input->post('travel_height'), true),
                'motor' => htmlspecialchars($this->input->post('power'), true),
                'parameter_list' => $dataInfo[0]['file_name'],
                'parameter_list1' => $dataInfo[1]['file_name'],
                'parameter_list2' => $dataInfo[2]['file_name'],
                'parameter_list3' => $dataInfo[3]['file_name'],
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];

            $this->db->insert('data_escalator', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New product elevator added!</div>');
            redirect('product/escalator');
        }
    }
    function editEscalator($slug_name)
    {
        $data['title'] = 'Edit Escalator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getKategoriElevator'] = $this->db->get('data_kategory_escalator')->result_array();

        $data['editEscalator'] = $this->product->editEscalator($slug_name);

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('kategori_id', 'kategori', 'required');
        $this->form_validation->set_rules('travel_height', 'travel height', 'required');
        $this->form_validation->set_rules('power', 'power', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/escalator-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $upload_image1 = $_FILES['new_parameter_1']['name'];
            $upload_image2 = $_FILES['new_parameter_2']['name'];
            $upload_image3 = $_FILES['new_parameter_3']['name'];
            $upload_image4 = $_FILES['new_parameter_4']['name'];
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_name' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
                'kategori_id' => htmlspecialchars($this->input->post('kategori_id'), true),
                'travel_height' => htmlspecialchars($this->input->post('travel_height'), true),
                'motor' => htmlspecialchars($this->input->post('power'), true),
                'keterangan' => htmlspecialchars($this->input->post('keterangan'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $this->load->library('upload', $this->set_upload_options());

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            };
            if ($upload_image1) {
                $this->load->library('upload', $this->set_upload_options());

                if ($this->upload->do_upload('new_parameter_1')) {
                    $old_image1 = $this->input->post('old_parameter_1');
                    unlink(FCPATH . 'assets/img/product/' . $old_image1);
                    $new_image1 = $this->upload->data('file_name');
                    $this->db->set('parameter_list', $new_image1);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            if ($upload_image2) {
                $this->load->library('upload', $this->set_upload_options());

                if ($this->upload->do_upload('new_parameter_2')) {
                    $old_image2 = $this->input->post('old_parameter_2');
                    unlink(FCPATH . 'assets/img/product/' . $old_image2);
                    $new_image2 = $this->upload->data('file_name');
                    $this->db->set('parameter_list1', $new_image2);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            if ($upload_image3) {
                $this->load->library('upload', $this->set_upload_options());

                if ($this->upload->do_upload('new_parameter_3')) {
                    $old_image3 = $this->input->post('old_parameter_3');
                    unlink(FCPATH . 'assets/img/product/' . $old_image3);
                    $new_image3 = $this->upload->data('file_name');
                    $this->db->set('parameter_list2', $new_image3);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            if ($upload_image4) {
                $this->load->library('upload', $this->set_upload_options());

                if ($this->upload->do_upload('new_parameter_4')) {
                    $old_image4 = $this->input->post('old_parameter_4');
                    unlink(FCPATH . 'assets/img/product/' . $old_image4);
                    $new_image4 = $this->upload->data('file_name');
                    $this->db->set('parameter_list3', $new_image4);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'data_escalator');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('product/escalator');
        }
    }
    public function deleteEscalator($slug_name)
    {
        $data['delete'] = $this->db->get_where('data_escalator', ['slug_name' => $slug_name])->row_array();
        $name_image = $data['delete']['image'];
        $name_image1 = $data['delete']['parameter_list'];
        $name_image2 = $data['delete']['parameter_list1'];
        $name_image3 = $data['delete']['parameter_list2'];
        $name_image4 = $data['delete']['parameter_list3'];
        if ($name_image != 'default-escalator.png') {
            unlink(FCPATH . 'assets/img/product/' . $name_image);
        }
        unlink(FCPATH . 'assets/img/product/' . $name_image1);
        unlink(FCPATH . 'assets/img/product/' . $name_image2);
        unlink(FCPATH . 'assets/img/product/' . $name_image3);
        unlink(FCPATH . 'assets/img/product/' . $name_image4);
        $this->db->where('slug_name', $slug_name);
        $this->db->delete('data_escalator');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('product/escalator');
    }

    /*--------------------------------------------------------------
    # Escalator
    --------------------------------------------------------------*/
    public function sparepart()
    {
        $data['title'] = 'Spare Part';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getSparepart'] = $this->product->getSparepart();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('product/sparepart', $data);
        $this->load->view('templates/footer', $data);
    }
    function addsparepart()
    {
        $data['title'] = 'Add Escalator';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('tipe', 'tipe', 'required');
        $this->form_validation->set_rules('material', 'material', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/sparepart-add', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_name' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
                'merk' => htmlspecialchars($this->input->post('merk'), true),
                'tipe' => htmlspecialchars($this->input->post('tipe'), true),
                'material' => htmlspecialchars($this->input->post('material'), true),
                'ukuran' => htmlspecialchars($this->input->post('ukuran'), true),
                'ringkasan_produk' => $this->input->post('ringkasan_produk'),
            ];
            $upload_image = $_FILES['image']['name'];
            if ($upload_image != "") {
                if ($upload_image) {
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                    $config['upload_path'] = './assets/img/product/';

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
                $this->db->set('image', 'default-sparepart.png');
            }
            $this->db->insert('data_sparepart', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New product elevator added!</div>');
            redirect('product/spare-part');
        }
    }
    function editsparepart($slug_name)
    {
        $data['title'] = 'Edit Spare Part';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();
        $data['getKategoriElevator'] = $this->db->get('data_kategory_escalator')->result_array();

        $data['editSparepart'] = $this->product->editSparepart($slug_name);

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('tipe', 'tipe', 'required');
        $this->form_validation->set_rules('material', 'material', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('product/sparepart-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            $data = [
                'name' => htmlspecialchars($this->input->post('name'), true),
                'slug_name' => htmlspecialchars(url_title($this->input->post('name'), 'dash', true)),
                'merk' => htmlspecialchars($this->input->post('merk'), true),
                'tipe' => htmlspecialchars($this->input->post('tipe'), true),
                'material' => htmlspecialchars($this->input->post('material'), true),
                'ukuran' => htmlspecialchars($this->input->post('ukuran'), true),
                'ringkasan_produk' => $this->input->post('ringkasan_produk'),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/img/product/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/product/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                    $error = array('error' => $this->upload->display_errors());
                    echo $this->load->view('upload_form', $error);
                }
            }
            $this->website->update_data($where, $data, 'data_sparepart');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data updated!</div>');
            redirect('product/spare-part');
        }
    }
    public function deletesparepart($slug_name)
    {
        $data['delete'] = $this->db->get_where('data_sparepart', ['slug_name' => $slug_name])->row_array();
        $name_image = $data['delete']['image'];
        if ($name_image != 'default-sparepart.png') {
            unlink(FCPATH . 'assets/img/product/' . $name_image);
        }
        $this->db->where('slug_name', $slug_name);
        $this->db->delete('data_sparepart');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('product/spare-part');
    }
}
