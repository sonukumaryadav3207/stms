<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentMaster extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkyModel'); // or StudentModel if separate
    }

    public function index()
    {
        $data['students'] = $this->SkyModel->get_all_students();
        // echo $this->db->last_query(); echo '<pre>'; print_r($data);die;
        $data['page_title'] = "Student Master";
        $this->render_template('student/student_master_view', $data);
    }

    public function add()
    {
        $data['page_title'] = "Add Student";
        $this->render_template('student/add_student', $data);
    }

    public function save()
    {
        $this->SkyModel->insert_student($this->input->post());
        $this->session->set_flashdata('success', 'Student added successfully');
        redirect('student/StudentMaster');
    }

    public function delete($id)
    {
        $this->SkyModel->delete_student($id);
        $this->session->set_flashdata('success', 'Student deleted');
        redirect('student/StudentMaster');
    }
}
