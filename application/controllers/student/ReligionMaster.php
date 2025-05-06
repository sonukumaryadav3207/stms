<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReligionMaster extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SkyModel', 'sky'); // Load your model
    }

    public function index()
    {
        $data['houses'] = $this->sky->get_all_houses();
        // echo '<pre>';print_r($data);die;
        $data['page_title'] = 'Religion Master';
        $this->render_template('student/house_master', $data);
    }
}
