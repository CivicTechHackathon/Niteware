<?php
defined('BASEPATH') OR exit('No direct script access is allowed');

class Pages extends MY_Admin
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
         $this->load_pages();
         $this->footer();
    }

    public function load_pages()
    {
        $this->load->view('admin/admin_pages');
    }
}
?>