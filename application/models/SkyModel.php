<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SkyModel extends CI_Model {

    public function __construct()
    {
        parent::__construct(); // Important to call parent constructor
    }

    public function get_all_houses()
    {
        return $this->db->get('house_master')->result_array(); // this line is line 7
    }

    public function get_all_Category()
    {
        return $this->db->get('Category_master')->result_array(); // this line is line 7
    }
}
?>