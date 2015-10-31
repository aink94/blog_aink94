<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
    function get_menu(){
        $q = $this->db->query('SELECT id_menu, nama_menu, link_menu FROM menu');
        return $q;
    }
    function get_child_menu(){
        $q = $this->db->query('SELECT nama_menu FROM menu a, submenu b WHERE a.id_menu=b.id_menu');
        return $q;
    }
    function get_sub_menu($id_menu){
        $q = $this->db->query('SELECT * FROM submenu WHERE id_menu = '.$id_menu);
        return $q;
    }
    function get_kata_bijak(){
        $q = $this->db->query('SELECT * FROM kata_bijak');
        return $q;
    }
}
