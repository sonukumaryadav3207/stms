<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        ignore_user_abort(true);
        set_time_limit(300);
    }

   
 
    // Reusable method to render pages with layout
    public function render_template($view = null, $data = [])
    {
        //application\views\layouts\header.php
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view($view, $data);
        $this->load->view('layouts/footer', $data);
    }
}
