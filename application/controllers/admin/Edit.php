<?php
defined('BASEPATH') OR exit('No direct script access is allowed');

class Edit extends MY_Admin
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->header();
        $this->top_header_navbar();
        $this->sidebar();
        $this->load_editArea();
        $this->footer();
    }

    public function load_editArea()
    {
        $this->load->view('admin/admin_editpage');
    }
}
?>