<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesEN extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('Pages_model');
        $this->load->view('headerEN');
    }

    public function index()
    {
        $name['members'] = $this->Pages_model->get_all_members();
        $this->load->view('pagesEN/index', $name);
        $this->load->view('footerEN');
    }

    function about()
    {
        $this->load->view('pagesEN/index-1');
        $this->load->view('footerEN');
    }

    function education()
    {
        $name['educations'] = $this->Pages_model->get_all_educations();
        $this->load->view('pagesEN/index-2', $name);
        $this->load->view('footerEN');
    }

    function video()
    {
        $name['video'] = $this->Pages_model->get_all_video();
        $this->load->view('pagesEN/index-3', $name);
        $this->load->view('footerEN');
    }

    function partners()
    {
        $name['partner'] = $this->Pages_model->get_all_partners();
        $this->load->view('pagesEN/index-4', $name);
        $this->load->view('footerEN');
    }

    function news()
    {
        $this->load->view('pagesEN/index-5');
        $this->load->view('footerEN');
    }

    function contacts()
    {
        $this->load->view('pagesEN/index-6');
        $this->load->view('footerEN');
    }

}
