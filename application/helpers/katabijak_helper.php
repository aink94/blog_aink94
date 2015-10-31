<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('kata_bijak')){
    function kata_bijak(){
        $CI =& get_instance();
        $CI->load->model('home_model');
        $kata_bijak = $CI->home_model->get_kata_bijak();
        $kata = '
        <div class="panel" style="background-color:#337AB7; border-radius:0px; color;#fff;">
            <div class="panel-body" style="padding: 5px">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="0.7" direction="up" height="20" align="center"><p style="margin:0px; color:#FFF">';
        foreach($kata_bijak->result_array() as $kb){
            $kata .= '"'.$kb['kutipan'].'" - <b>'.$kb['pencetus'].'</b> <br/>';
        }
        $kata .= '</p></marquee></div></div>';
        return $kata;
    }
}