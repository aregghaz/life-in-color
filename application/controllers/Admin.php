<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));


    }

    public function index($id = '')
    {
        $this->load->model('Admin_models');
        $nameP['partner'] = $this->Admin_models->get_all_partners($id);
        $nameP['video'] = $this->Admin_models->get_all_video($id);
        $this->load->view('pages/admin', $nameP);


    }

    function del_articles_partner($id = '')
    {
        $this->load->model('Admin_models');
        $this->Admin_models->del_partner($id);
        $this->load->view("pages/admin2", $this->index());
    }

    function del_articles_video($id = '')
    {
        $this->load->model('Admin_models');
        $this->Admin_models->del_video($id);
        $this->load->view("pages/admin2", $this->index());
    }

    function add_video()
    {


        $add['id'] = $_POST['id'];
        $add['headAM'] = $_POST['headAM'];
        $add['headEN'] = $_POST['headEN'];
        $add['textAM'] = $_POST['textAM'];
        $add['textEN'] = $_POST['textEN'];
        $add['link'] = $_POST['link'];
        $add['date'] = date("y.m.d.");
        $this->load->model('Admin_models');
        $this->Admin_models->add_video($add);
        $this->load->view("pages/admin2", $this->index());


    }

    function add_partner()
    {

        $addd['id'] = $_POST['id'];
        $addd['nameAM'] = $_POST['nameAM'];
        $addd['nameEN'] = $_POST['nameEN'];
        $addd['textAM'] = $_POST['textAM'];
        $addd['textEN'] = $_POST['textEN'];
        $addd['link'] = $_POST['link'];
        $this->load->model('Admin_models');
        $this->Admin_models->add_partner($addd);
        $this->load->view("pages/admin2", $this->index());


    }
}
