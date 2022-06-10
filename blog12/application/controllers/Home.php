<?php
class Home extends CI_Controller{
    public function index(){
        // Merender method atau property yg ada didalam object views
        $this->load->view('home/index');
    }
}
?>