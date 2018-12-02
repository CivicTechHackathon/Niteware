<?php
session_start();
defined('BASEPATH') OR exit('No direct script access is allowed');

class Dashboard extends MY_Admin
{
      public function __construct()
      {
          parent::__construct();
          if(!isset($_SESSION['user'])){
            redirect('admin/login','refresh');
          }
      }

      public function index()
      {
          $display_name=$_SESSION['user'];
          $this->header();
          $this->top_header_navbar();
          $this->sidebar();
          $this->load_dashboard();
          $this->footer();

      }


      /* Function responsible for loading dashboard area
      in which we have quick draft and other things */
      public function load_dashboard()
      {
          $this->load->view('admin/admin_dashboard');
      }
}

?>
