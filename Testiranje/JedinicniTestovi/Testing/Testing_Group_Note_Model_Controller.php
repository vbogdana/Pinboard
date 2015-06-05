<?<?php

class Testing_Group_Note_Model_Controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('GroupNote_Model','Model');
        
    }
    
    
    public function  index(){
        
        
        $idNote=13;
        $expected=FALSE;
        $real=$this->Model->canLock($idNote);
        $this->unit->run($real,$expected,"testiranje da li je beleska moze da se zakljuca");
        
        
       
        $expected=FALSE;
        $real=$this->Model->checkLocked($idNote);
        
        $this->unit->run($real,$expected,"testiranje da li radi beleska je zakljucana");
        
        
       $idNote=5;
       
        $expected="1";
        $real=$this->Model->lock($idNote);
        $this->unit->run($real,$expected,"testiranje da li se beleska zakljuca kada se pozove ova funkcija");
        
        
         $idNote=5;
       
        $expected="1";
        $real=$this->Model->unlock($idNote);
        $this->unit->run($real,$expected,"testiranje da li se beleska odkljuca kada se pozove ova funkcija");
        
          $idNote=5;
       
        $expected="group";
        $real=$this->Model->isGroupNote($idNote);
        $this->unit->run($real,$expected,"testiranje da li je beleska grupna ili personalna");
        
        
       
        
        $this->load->view('tests');
    }
    
}

