<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->Model('Home_model');
    }
    
    function index(){
        $data['title'] = 'Blog_AInk94';
        $data['get_menu'] = $this->Home_model->get_menu();
        $this->load->view('user/head', $data);
        $this->load->view('user/header', $data);
        $this->load->view('user/content', $data);
        $this->load->view('user/footer', $data);
    }
}
