<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));


    }
    public function index()
    {
        $this->load->model('Pages_model');
        $name['members'] = $this->Pages_model->get_all_members();
        $this->load->view('header');
        $this->load->view('pages/index', $name);
        $this->load->view('footer');
    }
    function about()
    {
        $this->load->view('header');
        $this->load->view('pages/index-1');
        $this->load->view('footer');
    }
    function education()
    {
        $this->load->model('Pages_model');
        $name['educations'] = $this->Pages_model->get_all_educations();
        $this->load->view('header');
        $this->load->view('pages/index-2', $name);
        $this->load->view('footer');
    }
    function video()
    {
        $this->load->model('Pages_model');
        $name['video'] = $this->Pages_model->get_all_video();
        $this->load->view('header');
        $this->load->view('pages/index-3', $name);
        $this->load->view('footer');
    }
    function partners()
    {
        $this->load->model('Pages_model');
        $name['partner'] = $this->Pages_model->get_all_partners();
        $this->load->view('header');
        $this->load->view('pages/index-4', $name);
        $this->load->view('footer');
    }
    function news()
    {
        $this->load->view('header');
        $this->load->view('pages/index-5');
        $this->load->view('footer');
    }
    function contacts()
    {
        $this->load->view('header');
        $this->load->view('pages/index-6');
        $this->load->view('footer');
    }
    function php_admin()
    {
        $this->load->model('Pages_model');
        $nameP['partner'] = $this->Pages_model->get_all_partners();
        $nameP['video'] = $this->Pages_model->get_all_video();
        $this->load->view('pages/admin',$nameP);


    }
}
