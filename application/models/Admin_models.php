<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_models extends CI_Model
{

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    function get_all_partners()
    {

        $query = $this->db->get('partner');
        return $query->result_array();
    }

    function get_all_video()
    {

        $query = $this->db->get('video');
        return $query->result_array();
    }

    function del_partner($id)
    {
        $this->db->where('id', $id);

        $this->db->delete('partner');
    }

    function del_video($id)
    {
        $this->db->where('id', $id);

        $this->db->delete('video');
    }

    function add_video($add)
    {

        $this->db->insert('video', $add);
    }
    function add_partner($addd)
    {

        $this->db->insert('partner', $addd);
    }
}
