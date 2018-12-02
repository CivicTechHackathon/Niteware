<?php
defined('BASEPATH') OR EXIT('No direct script access is allowed');
session_start();
class Personal extends MY_Admin{

    public function __construct()
      {
          parent::__construct();
          if(!isset($_SESSION['user'])){
            redirect('admin/login','refresh');
          }
      }


      public function index(){
       
            $display_name=$_SESSION['user'];
            $this->header();
            $this->top_header_navbar();
            $this->sidebar();
            $this->loadDetailsForm();
            $this->footer();
  
        }


        public function loadDetailsForm(){
            $this->load->view('admin/detailsForm');
        }
      
}
?>