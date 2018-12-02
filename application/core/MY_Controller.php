<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    private $data=array();

    public function __construct($title){
        parent::__construct();
        $this->data['title']=$title;
    }



    /* Function for header */
    protected function Header()
    {
          $this->load->view('web/components/acm/acm_page_header',$this->data);
    }


    /*
     Function for display navbar in ACM page AND AKSC Page
    */
     protected function Navbar($navbar_element)
     {
        //   $this->load->model_name();     Uncomment this line after creating database
        $this->load->view('web/components/acm/website_navbar',$navbar_element);
     }



    /* Function for display Contact Form in Both the page */
    protected function Contact()
    {
          //  $this->load->model_name();      Uncomment this line after creating database

          $this->load->view('web/components/acm/acm_page_contact');
    }



    /* Function for display Footer */
    protected function Footer()
    {
           //$this->load->model_name();      Uncomment this line after creating database

           $this->load->view('web/components/acm/acm_page_footer');
    }

}            /* Closing of MY_Controller Class */







/* ADMIN CONTROLLER CLASS FOR SERVE AS A BASE
CLASS FOR ALL CONTROLLER OF ADMIN FOLDER IN APPLICATION/CONTROLLER */
class My_Admin extends CI_Controller
{

        public function __construct()
         {
              parent::__construct();
         }


         /* Function responsible for loading header part */
         protected function header()
         {
             $this->load->view('admin/admin_header');
         }

         /* Function responsible for top header navbar */
         protected function top_header_navbar()
         {
             $this->load->view('admin/admin_navbar');
         }

         /* Function responsible for loading admin sidebar */
         protected function sidebar()
         {
              $this->load->view('admin/admin_sidebar');
         }

         /* Function responsible for loading admin footer area */
         protected function footer()
         {
             $this->load->view('admin/admin_footer');
         }


}
?>
