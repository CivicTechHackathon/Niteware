<?php
defined('BASEPATH') OR exit('No direct script access is allowed');
class Login_Model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_user($user,$pass)
    {
           $sql="SELECT * FROM users WHERE email='$user' and password=md5('$pass')";
           $result=$this->conn->query($sql);
           if(!$result){
               echo $this->conn->error;
           }
           return $result;
    }
}
 ?>
