<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SkyModel extends CI_Model
{

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

    public function get_all_students()
    {
        return $this->db->get('student_master')->result();
    }

    public function get_student_by_id($id)
    {
        return $this->db->get_where('student_master', ['id' => $id])->row();
    }

    public function insert_student($data)
    {
        return $this->db->insert('student_master', $data);
    }

    public function update_student($id, $data)
    {
        return $this->db->where('id', $id)->update('student_master', $data);
    }

    public function delete_student($id)
    {
        return $this->db->where('id', $id)->delete('student_master');
    }
}
