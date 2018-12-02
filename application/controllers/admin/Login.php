<?php
defined('BASEPATH') OR exit('No direct script access is allowed');
session_start();
class Login extends MY_Admin
{

     private $login_info=array();
     public function __construct()
     {
         parent::__construct();
         $this->load->model('admin/Login_Model');

     }

     public function index()
     {
         $login_error='';

          if(isset($_POST['login']))
          {
               $username=trim($_POST['username']);
               $password=trim($_POST['password']);
               $result=$this->Login_Model->check_user($username,$password);
               if($result->num_rows>0){
                     $row=$result->fetch_assoc();
                     $_SESSION['user']=$row['userName'];
                     redirect('admin/dashboard','refresh');
                }
                else{
                      $this->login_info['login_error']="Invalid Username and password";
                      $this->header();
                      $this->load->view('admin/admin_login',$this->login_info);
                    }
                  }

                  else
                  {
                      $this->header();
                      $this->load->view('admin/admin_login');
                  }
               }


               }



?>
