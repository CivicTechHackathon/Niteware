<?php
 class Comp extends My_Admin{
    private $table="competitions";

    private $comp_info=array();

    public function __construct(){
       parent::__construct();
       $this->load->model('admin/Comp_Modal');
       $this->comp_info['button_value']="admin/load_add_comp_view";
       if(!$this->session->has_userdata('username'))
       redirect('admin/login','refresh');
    }


    public function index(){
        $this->header();
        $this->top_header_navbar();
        $this->sidebar();
        $this->load_comp();
        $this->footer();

    }


    public function load_comp(){
        $this->comp_info['comp']=$this->Comp_Modal->get_all($this->table);
        $this->load->view('admin/competition/admin_comp',$this->comp_info); 
    }





 }
 ?>
