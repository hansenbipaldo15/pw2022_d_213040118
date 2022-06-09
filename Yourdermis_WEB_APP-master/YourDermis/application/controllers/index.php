<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }


    public function index(){
        $this->load->view('templates/header');
        $this->load->view('home/view_home');
        $this->load->view('templates/footer');
    }

    public function login(){
        $this->load->view('templates/header');
        $this->load->view('home/login');
        $this->load->view('templates/footer');
    }

    public function register(){
        $this->load->view('templates/header');
        $this->load->view('register/register');
        $this->load->view('templates/footer');
    }
}
