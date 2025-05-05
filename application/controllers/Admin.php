<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->loggedOut(); 
    }

    public function dashboard()
    {
        $data['page_title'] = 'Admin Dashboard';
        $this->render_template('admin/dashboard', $data);
    }

    public function form()
    {
        $data['page_title'] = 'Admin Dashboard';
        $this->render_template('admin/form', $data);
    }
}
