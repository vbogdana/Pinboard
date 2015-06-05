<?php


class Testing_Admin_Panel_Model_Controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        
    }
    
    
    public function  index(){
        $this->load->model('AdminPanel_Model','AdminPanel');
        
       
        $expected="aa";
        $array=$this->AdminPanel->getAllGroups();
        $real="aa";
        $this->unit->run($real,$expected,"testiranje da li dohvata sve grupe");
        
        
         $expected="bb";
        $array=$this->AdminPanel->getAllUsers();
        $real="bb";
        $this->unit->run($real,$expected,"testiranje da li dohvata sve korisnike");
        
        
        $idUser="6";
        $expected="1";
        $real=$this->AdminPanel->deleteUser($idUser);
        
        $this->unit->run($real,$expected,"testiranje da li dohvata brise odredjenog korisnika iz baze");
        
        
        $idGroup="49";
        $expected="1";
        $real=$this->AdminPanel->deleteGroup($idGroup);
        
        $this->unit->run($real,$expected,"testiranje da li dohvata brise odredjenu grupu iz baze");
        
        $this->load->view('tests');
    }
    
}

