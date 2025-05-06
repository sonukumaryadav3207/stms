<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryMaster extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkyModel', 'sky'); // Load your model
    }

    public function index()
    {
        $data['category'] = $this->sky->get_all_Category();
        // echo '<pre>';print_r($data);die;
        $data['page_title'] = 'Category Master';
        $this->render_template('student/category_master', $data);
    }
}
