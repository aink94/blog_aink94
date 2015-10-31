<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('menu')){
    function menu(){
        $CI =& get_instance();
        $CI->load->model('home_model');
        $menu = $CI->home_model->get_menu();
        $child_menu = $CI->home_model->get_child_menu()->row_array();
        $html = '<ul class="nav navbar-nav">';
        foreach($menu->result_array() as $m){
            if($m['nama_menu'] == $child_menu['nama_menu']){
                $html .= '<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$m['nama_menu'].'<b class="caret"></b></a>
                        <ul class="dropdown-menu">';
                $sub_menu = $CI->home_model->get_sub_menu($m['id_menu']);
                foreach($sub_menu->result_array() as $sm){
                    $html .= '<li><a href="'.$sm['link_submenu'].'">'.$sm['nama_submenu'].'</a></li>';
                }
                $html .= '</ul></i>';
            }else{
                $html .= '<li><a href="'.$m['link_menu'].'">'.$m['nama_menu'].'</a></li>';
            }
        }
        $html .= '</ul>';
        return $html;
    }
}