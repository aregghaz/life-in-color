<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {


    public function index()
    {
        $this->load->view('header');
        $this->load->view('pages/index');
        $this->load->view('footer');
    }
     function About()
    {
        $this->load->view('header');
        $this->load->view('pages/index-1');
        $this->load->view('footer');
    }
}
