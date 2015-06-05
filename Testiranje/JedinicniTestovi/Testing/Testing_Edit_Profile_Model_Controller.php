<?php

class Testing_Edit_Profile_Model_Controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        
    }
    
    
    public function  index(){
        $this->load->model('EditProfile_Model','Model');
        
       $pass="555555";
       $email="assasas@gmail.com";
       
        $expected="TRUE";
        $real=$this->Model->createEditEntry($pass, $email);
        $this->unit->run($real,$expected,"testiranje da li su promenjeni podaci korisnika");
        
        $idColor="2";
        $expected="2";
        $real=$this->Model->color($idColor);
        $this->unit->run($real,$expected,"testiranje da li je zeljena boja postavljena");
        
        
        $idUser="4";
        $expected="FFFAF0";
        $real=$this->Model->dohvatiBoju($idUser);
        
        $this->unit->run($real,$expected,"testiranje da li za odredjenog korisnika se dohvata njegova boja");
        
        
       
        
        $this->load->view('tests');
    }
    
}
