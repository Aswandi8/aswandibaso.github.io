<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    /*--------------------------------------------------------------
    # Role
    --------------------------------------------------------------*/
    public function dataRole($slug_role)
    {
        $query = "SELECT * FROM user_role WHERE slug_role = '$slug_role'";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Menu
    --------------------------------------------------------------*/
    public function dataMenu($slug_menu)
    {
        $query = "SELECT * FROM user_menu WHERE slug_menu = '$slug_menu'";
        return $this->db->query($query)->result_array();
    }

    /*--------------------------------------------------------------
    # Menu
    --------------------------------------------------------------*/
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
      ";
        return $this->db->query($query)->result_array();
    }
    public function dataSubmenu($slug_submenu)
    {
        $query = "SELECT user_sub_menu.*, user_menu.menu FROM user_sub_menu JOIN user_menu ON user_sub_menu.menu_id = user_menu.id WHERE user_sub_menu.slug_submenu = '$slug_submenu'";
        return $this->db->query($query)->result_array();
    }
}
