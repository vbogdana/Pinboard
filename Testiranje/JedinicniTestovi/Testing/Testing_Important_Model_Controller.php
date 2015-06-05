<?php

class Testing_Important_Model_Controller extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
        
    }
    
    
    public function  index(){
        $this->load->model('Important_Model','Model');
        
        $idNote=13;
       
        $expected="FALSE";
        $real=$this->Model->checkImportant($idNote);
        $this->unit->run($real,$expected,"testiranje da li je beleska stavljena da bude important","ako jeste vraca FALSE");
        
        
        $idNote=5;
       
        $expected="TRUE";
        $real=$this->Model->setImportant($idNote);
        $this->unit->run($real,$expected,"testiranje da li radi funkcija koja postavlja beleski vrednost important");
        
        
       $idNote=5;
       
        $expected="TRUE";
        $real=$this->Model->unsetImportant($idNote);
        $this->unit->run($real,$expected,"testiranje da li radi funkcija koja sklanja beleski vrednost important");
        
        
       
        
        $this->load->view('tests');
    }
    
}

