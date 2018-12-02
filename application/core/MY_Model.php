<?php
defined('BASEPATH') OR exit('No direct script access is allowed');

class MY_Model extends CI_Model
{
    private $host="localhost";
    private $username="root";
    private $dbname="devsec";
    private $password="";
    protected $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn();
    }


    private function conn()
    {
        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->dbname);

        if($this->conn->connect_error)
        {
            die("Unable to connect with database ".mysqli_connect_error());
        }
    }

   /* Base function which will provide getting all data from database */
    public function get_all($tablename,$id=null)
    {
       if($id==null){
        $sql="SELECT * FROM $tablename";
        $result=$this->conn->query($sql);
      }

      else{
        $sql="SELECT * FROM $tablename WHERE id=$id";
        $result=$this->conn->query($sql);
      }
        return $result;
   }


}


class Admin_Model extends MY_Model
{
    public function __construct(){
       parent::__construct();
   }


   protected function insert_img_in_gallery($img,$alt_text=null)
   {
       $table="gallery";
       if(empty($alt_text))
          $alt_text=$img;


       $sql="INSERT INTO $table(img_name,alt_text)
              VALUES('$img','$alt_text')";
        $this->conn->query($sql);

   }

   


   /*FUNCTION FOR EXTRACT IMAGES FROM DATABASE*/
   public function delete($table,$id){

       $sql="DELETE FROM $table
            WHERE id in ($id)";
        $result=$this->conn->query($sql);
        return $result;
   }

   public function change_apos($data){
       return str_replace("'","''","$data");
   }


}
?>
