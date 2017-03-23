<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_partners()
    {
        $this->db->select("*");
        $query = $this->db->get('partner');
        return $query->result_array();
    }

    public function get_all_members()
    {
        $this->db->select("*");
        $query = $this->db->get('members');
        return $query->result_array();
    }

    public function get_all_educations()
    {
        $this->db->select("*");
        $query = $this->db->get('education');
        return $query->result_array();
    }

    public function get_all_video()
    {
        $this->db->select("*");
        $query = $this->db->get('video');
        return $query->result_array();
    }
}
