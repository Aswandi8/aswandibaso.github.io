<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        ini_set('display_errors', 'off');
        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    /*--------------------------------------------------------------
    # Role
    --------------------------------------------------------------*/
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer', $data);
    }
    public function editrole($slug_role)
    {
        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataRole'] = $this->admin->dataRole($slug_role);

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/role-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'role' => htmlspecialchars($this->input->post('role')),
                'slug_role' => htmlspecialchars(url_title($this->input->post('role'), 'dash', true)),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id')),
            ];
            $this->admin->update_data($where, $data, 'user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role updated!</div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($slug_role)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['role'] = $this->db->get_where('user_role', ['id' => $slug_role])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer', $data);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    /*--------------------------------------------------------------
    # Menu
    --------------------------------------------------------------*/
    public function menu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required|is_unique[user_menu.slug_menu]');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'menu' => htmlspecialchars($this->input->post('menu'), true),
                'slug_menu' => htmlspecialchars(url_title($this->input->post('menu'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
            ];
            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('admin/menu');
        }
    }
    public function editmenu($slug_menu)
    {
        $data['title'] = 'Edit Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['dataMenu'] = $this->admin->dataMenu($slug_menu);

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('id', 'Id', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/menu-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'menu' => htmlspecialchars($this->input->post('menu'), true),
                'slug_menu' => htmlspecialchars(url_title($this->input->post('menu'), 'dash', true)),
                'icon' => htmlspecialchars($this->input->post('icon'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id'), true),
            ];
            $this->admin->update_data($where, $data, 'user_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated!</div>');
            redirect('admin/menu');
        }
    }
    public function deleteMenu($slug_menu)
    {
        $data['delete'] = $this->db->get_where('user_menu', ['slug_menu' => $slug_menu])->row_array();
        $id = $data['delete']['id'];
        if ($id > 2) {
            $this->db->where('slug_menu', $slug_menu);
            $this->db->delete('user_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data menu deleted!</div>');
            redirect('admin/menu');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data can not deleted!</div>');
            redirect('admin/menu');
        }
    }

    /*--------------------------------------------------------------
    # Menu
    --------------------------------------------------------------*/
    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['submenu'] = $this->admin->getSubMenu();

        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required|is_unique[user_sub_menu.slug_submenu]');
        $this->form_validation->set_rules('url', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/submenu', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'menu_id' => htmlspecialchars($this->input->post('menu_id'), true),
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_submenu' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'url' => htmlspecialchars($this->input->post('url'), true),
                'is_active' => htmlspecialchars($this->input->post('is_active'), true),
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New submenu added!</div>');
            redirect('admin/sub-menu');
        }
    }

    public function editsubmenu($slug_menu)
    {
        $data['title'] = 'Edit Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['dataSubmenu'] = $this->admin->dataSubmenu($slug_menu);

        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('id', 'Id', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/submenu-edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'menu_id' => htmlspecialchars($this->input->post('menu_id'), true),
                'title' => htmlspecialchars($this->input->post('title'), true),
                'slug_submenu' => htmlspecialchars(url_title($this->input->post('title'), 'dash', true)),
                'url' => htmlspecialchars($this->input->post('url'), true),
                'is_active' => htmlspecialchars($this->input->post('is_active'), true),
            ];
            $where = [
                'id' => htmlspecialchars($this->input->post('id')),
            ];
            $this->admin->update_data($where, $data, 'user_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu updated!</div>');
            redirect('admin/sub-menu');
        }
    }
    public function deleteSubmenu($slug_submenu)
    {
        $this->db->where('slug_submenu', $slug_submenu);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data sub menu deleted!</div>');
        redirect('admin/sub-menu');
    }
    public function submenuChangeActive()
    {
        $id = $this->input->post('val');
        $user_active = $this->input->post('apply');

        $result = $this->db->get_where('user_sub_menu', $id);

        if ($result->num_rows() < 1) {
            $this->db->query("UPDATE  user_sub_menu SET is_active = $user_active  WHERE id = $id");
        } else {
            $this->db->query("UPDATE  user_sub_menu SET is_active = $user_active  WHERE id = $id");
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Submenu is active changed!</div>');
    }

    /*--------------------------------------------------------------
    # Icon
    --------------------------------------------------------------*/
    public function icon()
    {
        $data['title'] = 'Icon';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profile'] = $this->db->get_where('data_company', ['id' => 1])->row_array();

        $data['getFavicon'] = $this->website->getFavicon();
        $data['getLogo'] = $this->website->getLogo();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/icon', $data);
        $this->load->view('templates/footer', $data);
    }
}
