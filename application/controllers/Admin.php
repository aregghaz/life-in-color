<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('Admin_models');
    }

    public function index()
    {
        $nameP['education'] = $this->Admin_models->get_all_education();
        $nameP['partner'] = $this->Admin_models->get_all_partners();
        $nameP['video'] = $this->Admin_models->get_all_video();
        $this->load->view('pages/admin', $nameP);
    }

    function del_articles_partner($id = '')
    {
        $this->Admin_models->del_partner($id);
        $this->load->view("pages/admin2", $this->index());
    }

    function del_articles_video($id = '')
    {
        $this->Admin_models->del_video($id);
        $this->load->view("pages/admin2", $this->index());
    }
    function del_articles_education($id = '')
    {
        $this->Admin_models->del_education($id);
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
        $this->Admin_models->add_partner($addd);
        $this->load->view("pages/admin2", $this->index());
    }

    function add_education()
    {
        $add['id'] = $_POST['id'];
        $add['nameAM'] = $_POST['nameAM'];
        $add['nameEN'] = $_POST['nameEN'];
        $add['textAM'] = $_POST['textEN'];
        $add['iframeAM'] = $_POST['iframeAM'];
        $add['iframeEN'] = $_POST['iframeEN'];
        $config['upload_path'] = './images/education/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '3000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('userfile');
        $fileData = $this->upload->data();
        $add['img'] = $fileData['file_name'];
        $this->Admin_models->add_education($add);
        $this->load->view("pages/admin2", $this->index());
    }

}
